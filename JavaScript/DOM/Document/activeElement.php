<!DOCTYPE html>
<html>

<body onclick="myFunction()">

    <h1>The Document Object</h1>
    <h2>The activeElement Property</h2>

    <input type="text" value="An input field">
    <button>A Button</button>

    <p>Click anywhere in the document to display the active element:</p>

    <p id="demo"></p>

    <script>
        $i = 0;

        function myFunction() {

            var clickedElement = document.activeElement;
            var $tagName = clickedElement.tagName;

            document.getElementById("demo").innerHTML = $tagName;

            console.log(++$i, clickedElement)
        }
    </script>

</body>
</html>
