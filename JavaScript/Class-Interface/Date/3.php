<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Dates</h2>

<p>The internal clock in JavaScript starts at midnight January 1, 1970.</p>

<p>Date.now() returns the number of milliseconds since January 1, 1970 00:00:00 UTC:</p>

<p id="demo"></p>
<p id="demo1"></p>
<p id="demo2"></p>

<script>
    let ms = Date.now();
    document.getElementById("demo").innerHTML = ms;

    let ms2 = Date.parse("2012 March 21, ");
    document.getElementById("demo2").innerHTML = ms2;
</script>

</body>
</html>
