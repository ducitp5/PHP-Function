<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
<h1>The Element Object</h1>
<h2>The firstElementChild Property</h2>

<ul id="myList">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Drink</li>
</ul>

<p>The HTML content of the list's first child is:</p>
<p id="demo"></p>

<ul id="myList">
    <li>111</li>
</ul>

<script>

    let myList = document.getElementById("myList");
    let jquerylist = $('#myList');
    console.log(myList)
    console.log(jquerylist)
    console.log(jquerylist[0])

    let firstElementChild = myList.firstElementChild;
    console.log(firstElementChild)
    console.log(firstElementChild.nextSibling)
    console.log(firstElementChild.nextElementSibling)
    console.log(333333333)
    console.log(firstElementChild.previousSibling)
    console.log(firstElementChild.previousElementSibling)

    let lastElementChild = myList.lastElementChild;

</script>

</body>
</html>
