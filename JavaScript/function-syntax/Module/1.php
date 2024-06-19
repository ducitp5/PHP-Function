<!DOCTYPE html>
<html>

<body>

<p id="demo"></p>

<script type="module">

    // import { name, age } from "./person.js";
    //
    // document.getElementById("demo").innerHTML = "My name is " + name;
    // document.getElementById("demo").innerHTML += ", I am " + age + ".";
    //
    // import * as $all from './person';
    //
    // console.log($all);


    import message from "./message.js";

    document.getElementById("demo").innerHTML = message();
</script>

</body>
</html>
