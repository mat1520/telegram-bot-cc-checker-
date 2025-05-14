function json_encode_like_in_PHP (it) {
	return JSON.stringify(it).replace(/[\u0080-\uFFFF]/g, function (match) {
		return '\\u' + ('0000' + match.charCodeAt(0).toString(16)).slice(-4);
	});
}

module.exports = json_encode_like_in_PHP;
