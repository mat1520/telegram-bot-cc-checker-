<?php



/**
 * CurlX Lib - v0.0.4
 * @author devblack
 */
class CurlX
{
    const VERSION = '0.0.4';

    private static array $default = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLINFO_HEADER_OUT    => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_TIMEOUT        => 60,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0
    ];

    private static string $current_dir = '';

    private static $ch;

    private static array $info;
    private static $headersCallBack;

    private static string $cookie_file = '';
    private static string $ua = '';

    private static int $error_code;
    private static string $error_string;

    private static $response;

    /**
     * Basic curl_init for request structure
     * 
     * @access private
     * @param string $url
     * 
     * @return void
     */
    private static function Prepare(string $url) : void 
    {
        self::$ch = curl_init($url);
        self::SetOpt(self::$default);
    }

    /**
     * Add options to current curl structure
     * 
     * @access public
     * @param array $args
     * 
     * @return void
     */
    public static function SetOpt(array $option) : void 
    {
        curl_setopt_array(self::$ch, $option);
    }

    /**
     * Add an header to current curl structure
     * 
     * @access private
     * @param header
     * 
     * @return void
     */
    private static function Header(array $header) : void
    {
        self::SetOpt([CURLOPT_HTTPHEADER => $header]);
    }

    /**
     *  Set a proxy tunnel configuration to current curl structure, support: HTTP/S, SOCKS4, SOCKS5
     * 
     * @access private
     * @param array $args
     * 
     * @return void
     */
    private static function Tunnel(array $args) : void 
    {
        self::SetOpt([
            CURLOPT_PROXY => $args['SERVER'],
            CURLOPT_HTTPPROXYTUNNEL => true
        ]);
    }

    /**
     * Proxy Auth
     * 
     * @access private
     * @param array $args
     * 
     * @return void
     */
    private static function proxyAuth(array $args) : void 
    {
        self::SetOpt([
            CURLOPT_PROXY => $args['SERVER'],
            CURLOPT_PROXYUSERPWD => $args['AUTH']
        ]);
    }

    /**
     * Detect the tunnel configuration
     * 
     * @access private
     * @param array $args
     * 
     * @return void
     */
    private static function AutoRouter($args) : void 
    {
        switch (strtoupper($args['METHOD'])) {
            case 'TUNNEL': self::Tunnel($args); break;
            case 'CUSTOM': self::proxyAuth($args); break;
        }
    }

    /**
     * Created a file in the temporal DIRECTORY and import to current curl structure
     * 
     * @access private
     * @param string $file
     * 
     * @return void
     */
    private static function SetCookie(string $file) : void 
    {
        // set the current dir
        self::$current_dir = dirname(__FILE__);
        # check if the dir exits, if not create it
        if(!is_dir(self::$current_dir.'/Cache/')) mkdir(self::$current_dir.'/Cache/', 0755);
        // PHP7.4+
        self::$cookie_file = sprintf("%s/Cache/curlX_%s.txt", self::$current_dir, $file);
        // check if the dir is writable
        if (!is_writable(self::$current_dir)) {
            trigger_error("The current directory is not writable, please add permissions 0755 to Cache dir and 0644 to CurlX.php", E_USER_ERROR);
            return;
        }
        
        self::SetOpt([
            CURLOPT_COOKIEJAR => self::$cookie_file,
            CURLOPT_COOKIEFILE => self::$cookie_file
        ]);
    }

    /**
     * Delete the current cookie file in curl structure
     * 
     * @access public
     * 
     * @return void
     */
    public static function DeleteCookie() : void 
    {
        if (empty(self::$current_dir))
            trigger_error("Cookie function (SetCookie) was not called!", E_USER_WARNING);
            return;

        if (is_file(self::$cookie_file)) {
            chmod(self::$cookie_file, 0644);
            unlink(self::$cookie_file);
        } else {
            trigger_error(sprintf("The filename: %s not exits in %s.", self::$cookie_file, self::$current_dir), E_USER_WARNING);
        }
    }

    /**
     * Check parameters for curl structure
     * 
     * @access private
     * @param array $headers
     * @param string $cookie
     * @param array $server
     * 
     * @return void
     */
    private static function CheckParam(array $headers=NULL, string $cookie=NULL, array $server=NULL) : void 
    {
        if (!empty($headers) && (is_array($headers) || is_object($headers)))
            self::Header($headers);

        if (!empty($cookie))
            self::SetCookie($cookie);

        if (!empty($server) && (is_array($server) || is_object($server)))
            self::AutoRouter($server);
    }

    /**
     * Send a GET request method with headers, cookies and server tunnel
     *
     * @access public
     * @param string $url
     * @param array $headers
     * @param string $cookie
     * @param array %server
     *
     * @return object
     */
    public static function Get(string $url, array $headers=NULL, string $cookie=NULL, array $server=NULL) : object
    {
        self::Prepare($url);
        self::SetOpt([CURLOPT_USERAGENT => self::userAgent()]);
        self::CheckParam($headers, $cookie, $server);
        return self::Run();
    }

    /**
     * Send a POST request method with custom post data, headers, cookies and server tunnel
     *
     * @access public
     * @param string $url
     * @param string|array $data
     * @param array $headers
     * @param string $cookie
     * @param array $server
     *
     * @return object
     */
    public static function Post(string $url, $data=NULL, array $headers=NULL, string $cookie=NULL, array $server=NULL) : object
    {
        self::Prepare($url);
        self::SetOpt([
            CURLOPT_USERAGENT      => self::userAgent(),
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => self::DataType($data)
        ]);
        self::CheckParam($headers, $cookie, $server);
        return self::Run();
    }

    /**
     * Send a CUSTOM request method with data, headers, cookies and server tunnel
     *
     * @access public
     * @param string $url
     * @param string $method
     * @param string|array $data
     * @param array $headers
     * @param string $cookie
     * @param array $server
     *
     * @return void
     */
    public static function Custom(string $url, string $method='GET', $data=NULL, array $headers=NULL, string $cookie=NULL, array $server=NULL) : void 
    {
        self::Prepare($url);
        self::SetOpt([
            CURLOPT_USERAGENT      => self::userAgent(),
            CURLOPT_CUSTOMREQUEST  => $method,
            CURLOPT_POSTFIELDS     => self::DataType($data)
        ]);
        self::CheckParam($headers, $cookie, $server);
    }

    /**
     * Send the request structure
     * 
     * @access public
     *
     * @return object
     */
    public static function Run() : object
    {
        self::MakeStdClass();
        self::SetOpt([CURLOPT_HEADERFUNCTION => createHeaderCallback(self::$headersCallBack)]);

        self::$response = curl_exec(self::$ch);
        self::$info = curl_getinfo(self::$ch);

        // Request failed
        if (self::$response === FALSE) {
            self::$error_code = curl_errno(self::$ch);
            self::$error_string = curl_error(self::$ch);

            curl_close(self::$ch);

            return (object) [
                'success' => false,
                'code'    => self::$info['http_code'],
                'headers' => (object) [
                    'request'  => key_exists('request_header', self::$info) ? self::parseHeadersHandle(self::$info['request_header']) : [],
                    'response' => self::parseHeadersHandle(self::$headersCallBack->rawResponseHeaders)
                ],
                'errno' => self::$error_code,
                'error' => self::$error_string,
                'body'  => 'Error, ' . self::$error_string
            ];
        } else {
            curl_close(self::$ch);

            return (object) [
                'success' => true,
                'code'    => self::$info['http_code'],
                'headers' => (object) [
                    'request'  => self::parseHeadersHandle(self::$info['request_header']),
                    'response' => self::parseHeadersHandle(self::$headersCallBack->rawResponseHeaders)
                ],
                'body'    => self::$response
            ];
        }
    }

    /**
     * Show all data process|errors of the request
     * 
     * @access public
     * @param bool $pretty
     * 
     * @return string
     */
    public static function Debug(bool $pretty=false) 
    {
        if ($pretty) {
            header('Content-Type: application/json');
            echo json_encode([
                'curlx_debug' => [
                    'information' => [
                        'request_headers'  => self::parseArray(self::$info),
                        'response_headers' => self::parseHeadersHandle(self::$headersCallBack->rawResponseHeaders)
                    ],
                    'errors' => [
                        'errnum' => self::$error_code ?? '',
                        'errstr' => self::$error_string ?? ''
                    ],
                    'response' => self::$response
                ]
            ]);
        } else {
            echo sprintf("=============================================<br/>\n<h2>CURLX DEBUG</h2>\n=============================================<br/>\n<h3>Response</h3>\n<code>%s</code><br/>\n\n", nl2br(htmlentities(self::$response)));
            echo sprintf("=============================================<br/>\n<h3>Information</h3><pre>%s</pre>", print_r(['request_headers' => self::parseArray(self::$info), 'response_headers' => self::parseHeadersHandle(self::$headersCallBack->rawResponseHeaders)], true));
            if (isset(self::$error_string)) {
                echo sprintf("=============================================<br/>\n<h3>Errors</h3>\n<strong>Code: </strong>%d<br/>\n<strong>Message: </strong>%d<br/>\n", self::$error_code, self::$error_string);
            }
        }
    }

    /**
     * Create a placeholder to temporarily store the header callback data.
     * 
     * @access private
     * 
     * @return void
     * 
     */
    private static function MakeStdClass() : void
    {
        $hcd = new \stdClass();
        $hcd->rawResponseHeaders = '';
        self::$headersCallBack = $hcd;
    }

    /**
     * Detect data type
     * 
     * @access private
     * @param string|array|object|null $data
     * 
     * @return string
     */
    private static function DataType($data) 
    {
        if (empty($data)) {
            return false;
        } elseif (is_array($data) || is_object($data)) {
            return json_encode($data);
        } else {
            return $data;
        }
    }

    /**
     * Can split a string by two specify strings
     * 
     * @access public
     * @param string $str
     * @param string $start
     * @param string $end
     * @param bool $decode
     * 
     * @return string
     */
public static function ParseString(string $str, string $start, string $end, bool $decode = false) : ?string 
{
    // Divide la cadena usando la cadena de inicio
    $parts = explode($start, $str);
    
    // Verifica si la cadena de inicio se encontró
    if (count($parts) < 2) {
        return "null"; // Retorna null si la cadena de inicio no se encuentra
    }
    
    // Divide la parte resultante usando la cadena de fin
    $parts = explode($end, $parts[1]);
    
    // Verifica si la cadena de fin se encontró
    if (count($parts) < 2) {
        return "null"; // Retorna null si la cadena de fin no se encuentra
    }
    
    // Obtiene la subcadena encontrada
    $result = $parts[0];
    
    // Decodifica si es necesario
    if ($decode) {
        $decoded = base64_decode($result, true);
        // Verifica si la decodificación fue exitosa
        if ($decoded === false) {
            return "null"; // Retorna null si la decodificación falla
        }
        return $decoded;
    }
    
    return $result;
}


    /**
     * Remove all spaces from a string
     * 
     * @access public
     * @param string $str
     * 
     * @return string
     */
    public static function CleanString(string $str) : string 
    {
        return preg_replace('/\s+/', '', $str);
    }

    /**
    * Get a rand value from specify file.txt
    *
    * @access public
    * @param string $file
    *
    * @return string
    */
    public static function GetRandVal(string $file) : string
    {
        $_ = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $_[array_rand($_)];
    }

    /**
     * Parse Headers
     *
     * @access private
     * @param string $raw
     *
     * @return array
     */
    private static function parseHeaders(string $raw) : array
    {
        $raw = preg_split('/\r\n/', $raw, -1, PREG_SPLIT_NO_EMPTY);
        $http_headers = [];
        
        for($i = 1; $i < count($raw); $i++) {
            if (strpos($raw[$i], ':') !== false) {
                list($key, $value) = explode(':', $raw[$i], 2);
                $key = trim($key);
                $value = trim($value);
                isset($http_headers[$key]) ? $http_headers[$key] .= ',' . $value : $http_headers[$key] = $value;
            }
        }

        return [$raw['0'] ??= $raw['0'], $http_headers];
    }

    /**
     *
     * @access private
     * @param array $raw
     *
     * @return array
     */
    private static function parseArray(array $raw) : array
    {
        if (array_key_exists('request_header', $raw)) {
            list($scheme, $headers) = self::parseHeaders($raw['request_header']);
            $nh['scheme'] = $scheme;
            $nh += $headers;
            $raw['request_header'] = $nh;
        }

        return $raw;
    }

    /**
     * Parse Headers Handle
     *
     * @access private
     * @param string $raw
     *
     * @return array
     */
    private static function parseHeadersHandle($raw) : array
    {
        if (empty($raw))
            return [];

        list($scheme, $headers) = self::parseHeaders($raw);
        $request_headers['scheme'] = $scheme;
        unset($headers['request_header']);
        
        foreach ($headers as $key => $value) {
            $request_headers[$key] = $value;
        }

        return $request_headers;
    }

    /**
     * return a random user agent
     * 
     * @access private
     *
     * @return string
     */
    private static function UserAgent() : string 
    {
        $uas = [
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:83.0) Gecko/20100101 Firefox/83.0",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0",
            "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:80.0) Gecko/20100101 Firefox/80.0",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:80.0) Gecko/20100101 Firefox/80.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:81.0) Gecko/20100101 Firefox/81.0",
            "Mozilla/5.0 (X11; Linux x86_64; rv:80.0) Gecko/20100101 Firefox/80.0",
            "Mozilla/5.0 (X11; Linux x86_64; rv:75.0) Gecko/20100101 Firefox/75.0",
            "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:79.0) Gecko/20100101 Firefox/79.0",
            "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:77.0) Gecko/20100101 Firefox/77.0",
            "Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8) Gecko/20060110 Debian/1.5.dfsg-4 Firefox/1.5",
            "Mozilla/5.0 (Android 10; Mobile; rv:79.0) Gecko/79.0 Firefox/79.0",
            "Mozilla/5.0 (Android 9; Mobile; rv:68.6.0) Gecko/68.6.0 Firefox/68.6.0",
            "Mozilla/5.0 (Android 7.1.1; Mobile; rv:68.0) Gecko/68.0 Firefox/68.0",
            "Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_2 like Mac OS X) AppleWebKit/603.2.4 (KHTML, like Gecko) FxiOS/7.5b3349 Mobile/14F89 Safari/603.2.4",
            "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15",
            "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Snapchat/10.77.5.59 (like Safari/604.1)",
            "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/80.0.3987.95 Mobile/15E148 Safari/604.1"
        ];

        if (empty(self::$ua)) {
            $ua = array_rand([$uas]);
            self::$ua = $ua;
            return self::$ua;
        } else {
            return self::$ua;
        }
    }
}

/**
 * Local createHeaderCallback 
 */
function createHeaderCallback($headersCallBack) {
    return function ($_, $header) use ($headersCallBack) {
        $headersCallBack->rawResponseHeaders .= $header;
        return strlen($header);
    };
}

/***
 * COD3D BY D3VBL4CK
 */
