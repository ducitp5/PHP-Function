<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The parseFloat() Method</h2>

<p>parseFloat() parses a string and returns the first number:</p>

<p id="demo"></p>

<script>
    document.getElementById("demo").innerHTML =
        parseFloat(10) + "<br>" +
        parseFloat("10") + "<br>" +
        parseFloat("10.33") + "<br>" +
        parseFloat("10,33") + "<br>" +
        parseFloat("34 45 66") + "<br>" +
        parseFloat("He was 40");
</script>

</body>
</html>
