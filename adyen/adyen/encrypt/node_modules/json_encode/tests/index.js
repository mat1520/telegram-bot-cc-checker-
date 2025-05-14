var should = require('should');
var json_encode = require('../');

describe('json_encode', function () {
	it('should encode cyrillic symbols like PHP version does', function () {
		json_encode({ a: 'мясо' }).should.eql('{"a":"\\u043c\\u044f\\u0441\\u043e"}');
	});
});
