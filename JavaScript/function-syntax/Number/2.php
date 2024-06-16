<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Numbers</h1>
<h2>The Number.isNaN() Method</h2>

<p>Number.isNaN() returns true if a value is NaN and of datatype Number, otherwise false.</p>

<p id="demo"></p>

<p>Number.isNaN() is not supported in Internet Explorer.</p>

<p id="demo2"></p>

<script>
    let result =
        "Is 123 NaN? " + Number.isNaN(123) + "<br>" +
        "Is -123 NaN? " + Number.isNaN(-1.23) + "<br>" +
        "Is '123' NaN? " + Number.isNaN('123') + "<br>" +
        "Is 0/0 NaN? " + isNaN(0 / 0);

    document.getElementById("demo").innerHTML = result;
</script>

<script>
    let num = 0.001658853;

    document.getElementById("demo2").innerHTML =
        num.toPrecision(2) + "<br>" +
        num.toPrecision(3) + "<br>" +
        num.toPrecision(10);
</script>

</body>
</html>
