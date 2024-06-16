<!DOCTYPE html>
<html>
<head>

    <title>My title</title>
    <style>
        h1{ background-color: yellow}
    </style>
</head>

<body>
<h1>The Document Object</h1>
<h2>The head Property</h2>

<p>The tag name of the head property is:</p>
<p id="demo"></p>
<p id="demo2"></p>

<script>
    let head = document.head;
    let tag = head.tagName;
    document.getElementById("demo").innerHTML = tag;

    console.log(head)

    let tag2 = document.head.firstElementChild.tagName;
    document.getElementById("demo2").innerHTML = tag2;

</script>

</body>
</html>
