<!DOCTYPE html>
<html>
<body>

<h1>Window Document Object</h1>
<h2>The URL Property</h2>

<p id="demo"></p>

<script>
    let url = document.URL;
    document.getElementById("demo").innerHTML = url;

    console.log(url);
</script>

</body>
</html>
