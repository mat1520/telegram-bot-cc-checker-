# json_encode

Do `JSON.stringify()` like `json_encode()` in PHP does.

## Installation

```bash
npm i json_encode --save
```

## Usage

```js
var json_encode = require('json_encode');
var encoded = json_encode({ something: 'новое' });

// encoded value will be '{"something":"\\u043d\\u043e\\u0432\\u043e\\u0435"}'
// but not '{"something":"новое"}' as you might expect, having experience with JSON.stringify
```

## License

MIT
