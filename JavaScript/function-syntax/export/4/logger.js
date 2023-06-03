import {TYPE_ERROR, TYPE_LOG, TYPE_WARN} from "./constant";

import * as content from "./constant"

console.log('toi la content - ',content)
function myLogger(log, type = content.TYPE_LOG) {

    console[type](log);
}

export default myLogger;

function myLogger2(log, type = TYPE_LOG) {

    console[type](log);
}

export { myLogger2 , TYPE_LOG, TYPE_WARN, TYPE_ERROR };

const $A = "A";
const $B = "B";

export { $A, $B }
