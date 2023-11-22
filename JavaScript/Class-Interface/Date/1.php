<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Dates</h2>

<p>new Date() creates a new date object with the current date and time:</p>

<p id="demo"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>
<p id="demo5"></p>

<script>
    const d = new Date();
    document.getElementById("demo").innerHTML = d;

    console.log(d);

    const d2 = new Date(100000000000);
    document.getElementById("demo2").innerHTML = d2;
    console.log(d2);

    const d3 = new Date("2015-03-25");
    document.getElementById("demo3").innerHTML = d3;
    console.log(d3);

    const d4 = new Date("2015-03-25 22:40:11");
    document.getElementById("demo4").innerHTML = d4;
    console.log(d4);

    const d5 = new Date(2018, 2, 24, 10, 33, 30, 9);
    document.getElementById("demo5").innerHTML = d5;
    console.log(d5);

</script>

</body>
</html>
