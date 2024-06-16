<!DOCTYPE html>
<html>
<body>

<h1 class="A" name="aa">The Document Object 1</h1>
<h1>The Document Object 2</h1>
<h2>The body Property</h2>

<p class="A">Display the HTML content of this document:</p>

<p id="demo" name="aa"> ggg </p>
<div id="demo"> abc </div>
<p>First Name: <input name="bb" type="text" value="Doug"></p>

<script>
    const myBody = document.body;
    console.log(myBody)

    $demo = document.getElementById("demo");
    $demo.innerHTML = myBody.innerText;

    console.log(1111, $demo)

    $tagH1 = document.getElementsByTagName("h1");
    console.log(22222, $tagH1)

    $classA = document.getElementsByClassName('A')
    console.log(33333, $classA)

    $getName = document.getElementsByName('aa')
    console.log(44444, $getName)

    $getName2 = document.getElementsByName('bb')
    console.log(555, $getName2)

</script>

</body>
</html>
