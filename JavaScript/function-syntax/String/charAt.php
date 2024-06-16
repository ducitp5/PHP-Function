<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Strings</h1>
<h2>The charAt() Method</h2>

<p>charAt() returns the character at a specified index (position) in a string.</p>
<p>Get the first character in a string:</p>

<p id="demo"></p>

<script>
    let text = "a-b-cd-e";
    let letter = text.charAt(1);

    document.getElementById("demo").innerHTML = letter;

    console.log(text.length);
    console.log(text.charCodeAt(0))

    console.log(text.substr(2, 4))

</script>

</body>
</html>
