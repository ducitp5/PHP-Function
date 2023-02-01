

export function squareNumber(x) {
    return x * x;
}

const pi = 3.14;
export { pi };

export function logger($x, $type = 'log') {

    console[$type]($x)
}



function logger2($x, $type = 'log') {

    console[$type]($x)
}

const $H = 5;
var   $V = 7;

export { logger2, logger3, $H, $V };

function logger3() {

    console.log('toi la log')
}

import  myLogger ,{ myLogger2, TYPE_LOG, TYPE_ERROR, TYPE_WARN } from "./logger";

myLogger('haha-----hah', TYPE_LOG)
myLogger2('bbbbbbb')

import * as $logger from "./logger"

console.log('file logger.js - ', $logger)

console.log('$logger.$A logger.js - ', $logger.default)

export { default } from "./logger";
