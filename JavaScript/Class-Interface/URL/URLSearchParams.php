<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>find demo</title>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<body>

<p><span>Hello</span>, how are you?</p>
<p>Me? I'm <span>good</span>.</p>

<script>
    var queryString = window.location.search;

    queryString = 'https://example.com/?A=a&B=b&c&size=m,l&size=s';
    queryString = '?A=a&B=b&size=m,l&c&size=s';

    const urlParams = new URLSearchParams(queryString);

    alert(urlParams);
    console.log(queryString, urlParams);

    const A = urlParams.get('A')
    console.log(A);    // shirt

    const B = urlParams.get('B')
    console.log(B);    // blue

    const c = urlParams.get('c')
    console.log(c);    // empty string

    const D = urlParams.get('D')
    console.log(D);    // empty string

    console.log(urlParams.get('size'));

    console.log(1111, urlParams.getAll('A'));    //  [ "a" ]
    console.log(urlParams.getAll('size'));       //  [ "m,l", "s" ]
    console.log(urlParams.getAll('D'));

    console.log(urlParams.has('A'));    // true
    console.log(urlParams.has('D'));    // false

    //Programmatically add a second size parameter.
    urlParams.append('size', 'xl');

    console.log(urlParams.getAll('size'));  // [ "m,l", "s", "xl" ]

    console.log('-------- keys -------');
    const
        keys = urlParams.keys(),
        values = urlParams.values(),
        entries = urlParams.entries();

    console.log(keys);
    for (const key of keys) console.log(key);
    // product, color, newuser, size

    console.log('-------- values -------');
    console.log(values);
    for (const value of values) console.log(value);
    // shirt, blue, , m

    console.log('-------- entries -------');
    console.log(entries);
    for(const entry of entries) {
        console.log(`${entry[0]}: ${entry[1]}`);
    }

</script>


</body>
</html>
