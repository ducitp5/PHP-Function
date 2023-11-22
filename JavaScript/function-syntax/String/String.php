<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The String() Method</h2>

<p>String() converts a value to a string:</p>


<p id="demo"></p>

<script>
    document.getElementById("demo").innerHTML =
        String(new Date()) + "<br>" +
        String("12345") + "<br>" +
        String(12345);

    console.log( String(12345), String("12345"))
</script>

</body>
</html>
