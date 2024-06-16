<!DOCTYPE html>
<html>
<body>

<h1>The Document Object</h1>
<h2>The addEventListener() Method</h2>

<p>Click anywhere in the document to display "Hello World!".</p>

<p id="demo"></p>

<script>
    document.addEventListener("click", myFunction);

    function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World";
    }

</script>

</body>

</html>
