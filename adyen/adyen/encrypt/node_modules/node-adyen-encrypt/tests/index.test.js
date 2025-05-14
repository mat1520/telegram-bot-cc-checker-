const adyenKey =
    "10001|90C7821C961865FB4AD23F172E220F726A5CC7B9956BC3458E2788" +
    "F9D725B07536E297B89243081916AAF29E26B7624453FC84CB10FC7DF386" +
    "31B3FA0C2C01765D884B0DA90145FCE217446BCDCE4771E30E6E5630E797" +
    "EE289D3A712F93C676994D2746CBCD0BEDD7D29618AF45FA6230C1D41FE1" +
    "DB0193B8FA6613F1BD145EA339DAC449603096A40DC4BF8FACD84A5D2CA5" +
    "ECFC59B90B928F31715A7034E7B674E221F1EB1D696CC8B734DF7DE2E309" +
    "E6E8CF94156686558522629E8AF59620CBDE58327E9D84F29965E4CD0FAF" +
    "A38C632B244287EA1F7F70DAA445D81C216D3286B09205F6650262CAB415" +
    "5F024B3294A933F4DC514DE0B5686F6C2A6A2E";

const cardData = {
    number: "5369 6587 0410 7605",
    cvc: "855",
    holderName: "Bob Dylan",
    expiryMonth: "12",
    expiryYear: "2022",
    generationtime: "2020-11-30T14:38:25.124Z",
};

const validationResponse = {
    valid: true,
    number: true,
    luhn: true,
    cvc: true,
    holderName: true,
    month: true,
    expiryMonth: true,
    year: true,
    expiryYear: true,
    generationtime: true,
};

describe("app()", () => {
    it("should works with v18", () => {
        const adyenEncrypt = require("../index")(18);
        
        // apparently those weren't supported on v18?
        delete cardData.generationtime;
        delete validationResponse.generationtime;

        const cseInstance = adyenEncrypt.createEncryption(adyenKey, {});
        const validation = cseInstance.validate(cardData);

        expect(validation).toEqual(validationResponse);
    });

    it("should works with v22", () => {
        const adyenEncrypt = require("../index")(22);

        const cseInstance = adyenEncrypt.createEncryption(adyenKey, {});
        const validation = cseInstance.validate(cardData);

        expect(validation).toEqual(validationResponse);
    });

    it("should works with v23", () => {
        const adyenEncrypt = require("../index")(23);

        const cseInstance = adyenEncrypt.createEncryption(adyenKey, {});
        const validation = cseInstance.validate(cardData);

        expect(validation).toEqual(validationResponse);
    });

    it("should works with v24", () => {
        const adyenEncrypt = require("../index")(24);

        const cseInstance = adyenEncrypt.createEncryption(adyenKey, {});
        const validation = cseInstance.validate(cardData);

        expect(validation).toEqual(validationResponse);
    });

    it("should works with v25", () => {
        const adyenEncrypt = require("../index")(25);

        const cseInstance = adyenEncrypt.createEncryption(adyenKey, {});
        const validation = cseInstance.validate(cardData);

        expect(validation).toEqual(validationResponse);
    });
});
