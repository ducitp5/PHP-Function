<!DOCTYPE html>
<html>
<head>
    <style>
        div {
            background-color: lightblue;
            height: 2000px;  width: 2000px;
        }
    </style>
</head>
<body>

<h1>The Window Object</h1>
<h2>The scrollX and scrollY Properties</h2>

<p>Click the button to scroll the document window 100px horizontally and vertically.</p>

<button onclick="back()" style="position:fixed;">Back</button><br><br>
<button onclick="myFunction()" style="position:fixed;">Click me to scroll</button><br><br>
<button onclick="myFunction2()" style="position:fixed;">Scroll To</button><br><br>

<div></div>

<script>
    function back() {
        window.scrollTo(0, 0);
        alert("pageXOffset: " + window.scrollX + ", scrollY: " + window.scrollY);
    }

    function myFunction() {
        window.scrollBy(100, 100);
        alert("pageXOffset: " + window.scrollX + ", scrollY: " + window.scrollY);
    }

    function myFunction2() {
        window.scrollTo(500, 700);
        alert("pageXOffset: " + window.scrollX + ", scrollY: " + window.scrollY);
    }
</script>

</body>
</html>
