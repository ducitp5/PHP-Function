export const greet = (name) => `Hello, ${name}!`;
export const calculateSum = (a, b) => a + b;

// mixins/logger.js
export const loggerMixin = {
    logInfo(message) {
        console.log(`INFO: ${message}`);
    },
    logError(message) {
        console.error(`ERROR: ${message}`);
    },
};
