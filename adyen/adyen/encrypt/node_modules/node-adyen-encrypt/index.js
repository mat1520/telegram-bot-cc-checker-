const adyenEncrypt = (versionParam) => {
    const version = getVersion(~~versionParam);
    return require("./lib/0_1_" + version);
};

const availableVersions = [18, 22, 23, 24, 25];

const getVersion = (version) => {
    return availableVersions.includes(version) ? version : 24;
};

module.exports = adyenEncrypt;
