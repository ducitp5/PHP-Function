<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Arrays</h2>

<p>The Array.reverse() method reverses the order of the elements in an array.</p>

<p id="demo"></p>

<script>
    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    document.getElementById("demo").innerHTML = fruits.reverse();
    console.log(fruits);
    console.log(fruits.join('-'));
</script>

</body>
</html>
