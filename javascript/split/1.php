<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Strings</h1>
<h2>The split() Method</h2>

<p>split() splits a string into an array of substrings, and returns the array:</p>

<p id="demo"></p>

<script>
    let text = "a B CD E";
    const myArray = text.split(" ");

    document.getElementById("demo").innerHTML = myArray;

    console.log('a-b-cd-e'.split('-'));
</script>

</body>
</html>