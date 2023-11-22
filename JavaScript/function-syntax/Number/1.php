<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Numbers</h1>
<h2>The Number.isInteger() Method</h2>

<p>Number.isInteger() returns true if the value is an integer of the datatype Number:</p>

<p id="demo"></p>

<p>Number.isInteger() is not supported in Internet Explorer 11 and earlier.</p>

<script>
    let result =
        "Is 123 an integer? " + Number.isInteger(1.23) + "<br>" +
        "Is -123 an integer? " + Number.isInteger(-123) + "<br>" +
        "Is '123' an integer? " + Number.isInteger('123');

    document.getElementById("demo").innerHTML = result;
</script>

</body>
</html>
