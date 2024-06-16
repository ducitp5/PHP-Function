<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Statements</h1>
<h2>The break Statement</h2>

<p>When i equals 12 in Loop2, the break statement "jumps out" of Loop1.</p>

<p id="demo"></p>

<script>
    let text = "";

    // The first for loop is labeled Loop1:
    Loop1:
        for (let i = 0; i < 3; i++) {
            text += i + "<br>";

// The second for loop is labeled Loop2:
            Loop2:
                for (let j = 10; j < 15; j++) {
                    text += j + "<br>";
                    if (j === 12) break Loop1;
                }
        }
    document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>
