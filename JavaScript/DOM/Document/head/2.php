<!DOCTYPE html>
<html>

<body>
<h1>The Document Object</h1>
<h2>The head Property</h2>

<p>The tag name of the head property is:</p>
<p id="demo"></p>

<script>
    let tag = document.head.tagName;
    document.getElementById("demo").innerHTML = tag;

    // console.log(document.head)
</script>

</body>
</html>
