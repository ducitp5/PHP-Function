<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The decodeURI() Method</h2>

<p id="demo"></p>

<script>
    let uri = "my a.b?a=Â&e=E";
    let encoded = encodeURI(uri);
    let decoded = decodeURI(encoded);

    document.getElementById("demo").innerHTML = "Encoded URI:<br>" + encoded + "<br><br>" + "Decoded URI:<br>" + decoded;

    console.log(encoded)
    console.log(decoded)

</script>

</body>
</html>
