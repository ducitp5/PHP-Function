//main.js
import {squareNumber, $pi as pi} from "./functionsFile.js";
const radius = 7;
console.log("Area of a circle is", pi * squareNumber(7));

//Cách khác để import

import * as mathFuncs from "./functionsFile.js";
console.log("Area of circle is --- ", mathFuncs.$pi * mathFuncs.squareNumber(7));
