<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Statements</h1>
<h2>The break Statement</h2>

<p id="demo"></p>

<script>
    const cars = ["BMW", "Volvo", "Saab", "Ford"];
    let text = "";

    $lists: {
        text += cars[0] + "<br>";
        text += cars[1] + "<br>";
        text += cars[2] + "<br>";
        break $lists;
        text += cars[3] + "<br>";
    }

    {
        text += cars[0] + "<br>";
        text += cars[1] + "<br>";
        text += cars[2] + "<br>";
        text += cars[3] + "<br>";
    }

    document.getElementById("demo").innerHTML = text;

    console.log($lists);
</script>

</body>
</html>
