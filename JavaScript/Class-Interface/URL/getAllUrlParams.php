<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>find demo</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

</head>
<body>

<script src="getAllUrlParams.js"></script>

<script>
    var $url = 'http://example.com/?product=shirt&color=blue&newuser&size=m';

    $product = getAllUrlParams($url).product; // 'shirt'
    $color = getAllUrlParams($url).color; // 'blue'
    $newUser = getAllUrlParams($url).newuser; // true
    $nonExit = getAllUrlParams($url).nonexistent; // undefined
    $params = getAllUrlParams('http://test.com/?a=abc').a;

    console.log($product, $color, $newUser, 2222, $nonExit, $params, getAllUrlParams($url));
</script>

</body>
</html>
