<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The Number() Method</h2>

<p>Number() converts a value to a number if possible:</p>

<p id="demo"></p>

<script>
    document.getElementById("demo").innerHTML =
        Number(true) + "<br>" +
        Number(false) + "<br>" +
        Number(new Date())+ "<br>" +
        Number('abc')+ "<br>" +
        Number('12')+ "<br>" +
        Number('12/12')+ "<br>"
    ;
</script>

</body>
</html>
