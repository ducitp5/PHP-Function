<!DOCTYPE html>
<html>
<body>

<h1>The Window Object</h1>
<h2>The setTimeout() and clearTimeout() Methods</h2>

<p>Click "Stop" to prevent myGreeting() to execute. (You have 5 seconds)</p>

<button onclick="myStopFunction()">Stop!</button>

<h2 id="demo"></h2>

<script>
    const myTimeout = setTimeout(myGreeting, 3000);
    const myTimeout2 = setTimeout(myGreeting, 5000);
    const myTimeout3 = setTimeout(myGreeting, 6000);

    console.log(myTimeout, myTimeout2, myTimeout3);

    function myGreeting() {
        document.getElementById("demo").innerHTML = "Happy Birthday!"
    }

    function myStopFunction() {
        clearTimeout(myTimeout);
    }
</script>

</body>
</html>