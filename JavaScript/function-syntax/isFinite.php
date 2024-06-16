<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The isFinite() Method</h2>

<p>isFinite() returns false if a value is Infinity, -Infinity, or NaN, otherwise true.</p>

<p id="demo"></p>

<script>
    let result = isFinite(123);
    document.getElementById("demo").innerHTML = result;

    console.log(isFinite(123))
    console.log(isFinite('123'))
</script>

</body>
</html>
