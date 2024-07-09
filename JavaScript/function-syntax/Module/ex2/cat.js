/**
 * Trung Quân
 * https://cv.trungquandev.com
 * June 19, 2018
 */
//cat.js

(function(exports) {
    exports.getRandomCat = function (catsArr) {
        return catsArr[Math.floor(Math.random() * catsArr.length)];
    };
}(typeof exports === 'undefined' ? this.getRandomCatBrowser = {} : exports));

/**
 * end
 */
