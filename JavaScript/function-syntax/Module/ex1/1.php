<!DOCTYPE html>
<html>

<body>

<p id="demo"></p>

<script type="module">

    import { name, age } from "./person.js";

    document.getElementById("demo").innerHTML = "My name is " + name;
    document.getElementById("demo").innerHTML += ", I am " + age + ".";

    import * as $all from './person';

    console.log($all);


    import message from "./message.js";
    console.log(message);
    console.log(message());

    document.getElementById("demo").innerHTML = message();

    import * as $mesage from './message.js';
    console.log(333, $mesage);


</script>

</body>
</html>
