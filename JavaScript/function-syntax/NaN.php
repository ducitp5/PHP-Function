<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Global Methods</h1>
<h2>The isNaN() Method</h2>

<p>isNaN() returns true if a value is NaN:</p>

<p id="demo"></p>
<p id="demo2"></p>

<script>
    let result =
        "Is 123 NaN? " + isNaN(123) + "<br>" +
        "Is -1.23 NaN? " + isNaN(-1.23) + "<br>" +
        "Is 5-2 NaN? " + isNaN(5-2) + "<br>" +
        "Is 0 NaN? " + isNaN(0);
    document.getElementById("demo").innerHTML = result;
</script>

<script>
    result =
        "Is '123' NaN? " + isNaN('123') + "<br>" +
        "Is 'Hello' NaN? " + isNaN('Hello') + "<br>" +
        "Is '2005/12/12' NaN? " + isNaN('12/12');
    document.getElementById("demo2").innerHTML = result;

    console.log(isNaN('12/12'))
</script>


</body>
</html>
