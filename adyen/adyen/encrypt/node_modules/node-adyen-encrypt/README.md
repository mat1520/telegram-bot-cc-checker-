<h1 align="center">Classic Adyen Client-Side Encryption (CSE) on Node </h1>

> **[DEPRECATED]** This module is deprecated since the original Adyen CSE project is deprecated and this encrytion method will not work with latest versions of Adyen SDK. Please use the official [Adyen Web Components](https://github.com/Adyen/adyen-web) for Credit Card integration.

> A NodeJS helper to encrypt data with the Adyen CSE

## Prerequisites:

You will need a `Adyen Key`

## Install

```sh
npm install node-adyen-encrypt
```

## Specific Version import

```js
     const adyenEncrypt = require('node-adyen-encrypt')(25);
     // this will import the 0_1_25 version
     const adyenEncrypt = require('node-adyen-encrypt')(24);
     // this will import the 0_1_24 version
     const adyenEncrypt = require('node-adyen-encrypt')(23);
     // this will import the 0_1_23 version
     const adyenEncrypt = require('node-adyen-encrypt')(22);
     // this will import the 0_1_22 version
```

## Usage

```js
     const adyenEncrypt = require('node-adyen-encrypt')(24);
     //this will import the 0_1_24 version

     const adyenKey     =   "your key as retrieved from the Adyen Customer Area Web Service User page";
     const options = {};
     const cardData = {
         number : cardNumber,       // 'xxxx xxxx xxxx xxxx'
         cvc : cvc,                 //'xxx'
         holderName : holderName,   // 'John Doe'
         expiryMonth : expiryMonth, //'MM'
         expiryYear : expiryYear,   // 'YYYY'
         generationtime : generationtime // new Date().toISOString()
     };
     const cseInstance = adyenEncrypt.createEncryption(adyenKey, options);
     cseInstance.validate(cardData);
     const dataEncrypted = cseInstance.encrypt(cardData);
```

## Author

👤 **Danilo Pedrosa**

- Github: [@dmop](https://github.com/dmop)

## Show your support

Give a ⭐️ if this project helped you!
