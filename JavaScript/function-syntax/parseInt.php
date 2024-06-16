<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The parseInt() Method</h2>
<p>parseInt() parses a string and returns the first integer:</p>

<p id="demo"></p>

<script>
    document.getElementById("demo").innerHTML =
        parseInt("10") + "<br>" +
        parseInt("10.00") + "<br>" +
        parseInt("10.33") + "<br>" +
        parseInt("34 45 66") + "<br>" +
        parseInt("   60   ") + "<br>" +
        parseInt("40 years") + "<br>" +
        parseInt("He was 40");
</script>

</body>
</html>
