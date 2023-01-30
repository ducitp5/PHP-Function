<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Arrays</h2>

<p>The Array.splice() method adds array elements:</p>

<p id="demo"></p>

<script>
    const fruits = ["a", "b", "c", "d"];

    // At position 2, add 2 elements:
    fruits.splice(1, 2, "e", "f");

    document.getElementById("demo").innerHTML = fruits;
</script>

</body>
</html>
