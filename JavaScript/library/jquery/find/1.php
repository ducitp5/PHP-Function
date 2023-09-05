<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>find demo</title>
<!--    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>-->
    <script src="../jquery.min.js"></script>
</head>
<body>

<p><span>Hello</span>, how are you?</p>
<p>Me? I'm <span>good</span>.</p>

<script>
    $( "p" ).find( "span" ).css( "color", "red" );
</script>

<ul class="level-1">
    <li class="item-i">I</li>
    <li class="item-ii">II
        <ul class="level-2">
            <li class="item-a">A</li>
            <li class="item-b">B
                <ul class="level-3">
                    <li class="item-1">1</li>
                    <li class="item-2">2</li>
                    <li class="item-3">3</li>
                </ul>
            </li>
            <li class="item-c">C</li>
        </ul>
    </li>
    <li class="item-iii">III</li>
</ul>

<script>
    $selector = $( "li.item-ii" );

    $liSelected = $selector.find( "li" );

    $liSelected.css( "background-color", "red" );

    console.log($selector, $liSelected)
</script>

</body>
</html>
