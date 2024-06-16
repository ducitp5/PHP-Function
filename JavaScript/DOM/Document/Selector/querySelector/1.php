<!DOCTYPE html>
<html>
<body>

<h1 name="aa">h1 The Document Object</h1>
<h1>h1 The Document Object 2</h1>
<h1>h1 The Document Object 3</h1>

<h2>h2 The querySelector() Method</h2>

<div class="div1">
    <h3>h3 Add a background color to the first p element:</h3>
    <p class="pp">p This is a p element. 1</p>
    <p class="p2">p This is a p element. 2</p>
    <p class="p2">p This is a p element. 2</p>
</div>


<script>
    $$ = document;

    $p = $$.querySelector("p");
    $p.style.backgroundColor = "red";

    console.log($p)

    $ps = $$.querySelectorAll("p");
    console.log($ps)

    $i = $$.querySelector("i");
    console.log($i)

    $div1pp =  $$.querySelectorAll(".div1 .p2");
    console.log($div1pp)

    $h1s = $$.getElementsByTagName('h1');
    console.log($h1s)

</script>

</body>
</html>
