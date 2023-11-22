<!DOCTYPE html>
<html>
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

<script>

    let myList = document.getElementById("myList");

    // let firstElementChild = myList.firstElementChild;
    // let lastElementChild = myList.lastElementChild;
    //
    // let text = firstElementChild.innerHTML;
    //
    // document.getElementById("demo").innerHTML = text;
    //
    // console.log(myList, firstElementChild, lastElementChild)
    //
    let childNodes = myList.childNodes;
    let children = myList.children;
    let childElementCount = myList.childElementCount;

    console.log(childElementCount, childNodes, children)
    //
    // let firstChild2  = myList.firstChild ;
    // let firstElementChild2 = myList.firstElementChild;

    // console.log(firstChild2, firstElementChild2)

</script>

</body>
</html>
