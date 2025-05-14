const adyenEncrypt = require('node-adyen-encrypt')(25)
let json_encode = require('json_encode')

let   cc   = process.env.CC
let   mm   = process.env.MES
let   yy   = process.env.ANO
let   cvc  = process.env.CVV
let   name = process.env.NAME
const adyenKey  = process.env.KEY

const options = {};
const cardData = {
    number : cc,
    cvc : cvc,
    holderName : name,
    expiryMonth : mm,
    expiryYear : yy,
    generationtime : new Date().toISOString()
};

const cseInstance = adyenEncrypt.createEncryption(adyenKey, options);
cseInstance.validate(cardData);

const dataEncrypted = {
    cc : cseInstance.encrypt(cardData),
    mm : cseInstance.encrypt(cardData),
    yy : cseInstance.encrypt(cardData),
    cvc : cseInstance.encrypt(cardData),
    gen_time : cardData.generationtime,
    holderName : cardData.holderName
}

console.log(json_encode(dataEncrypted))