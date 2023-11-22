<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>JavaScript Statements</h1>
<h2>The debugger Statement</h2>

<p>Remember to open the console (Press F12) before you click "Run".</p>
<p>With the debugger turned on, the code should stop executing before the third line:</p>

<p id="demo"></p>

<script>
    let x = 15 * 5;
    debugger;
    document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>
