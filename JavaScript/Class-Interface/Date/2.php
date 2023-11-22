<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Dates</h1>
<h2>The getDate() Method</h2>

<p>getDate() returns the day of the month (from 1 to 31) of a date:</p>

<p id="demo"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>
<p id="demo5"></p>
<p id="demo6"></p>
<p id="demo7"></p>

<script>
    const d = new Date();

    let day = d.getDate();
    document.getElementById("demo").innerHTML = day;
    console.log(day)

    let day2 = d.getDay()
    document.getElementById("demo2").innerHTML = day2;
    console.log(day2)

    let month = d.getMonth();
    document.getElementById("demo3").innerHTML = month;
    console.log(month)

    let year = d.getFullYear();
    document.getElementById("demo4").innerHTML = year;
    console.log(year)

    let time = d.getTime();
    document.getElementById("demo5").innerHTML = time;
    console.log(time)

    let ms1 = d.toDateString();
    document.getElementById("demo6").innerHTML = ms1;

    let text = d.toTimeString();
    document.getElementById("demo7").innerHTML = text;
    console.log(text)

</script>

</body>
</html>
