<script>

    // $options = {
    //     $title2: "Menu",
    //     width: 100,
    //     height: 200
    // };
    //
    // var { width, $title2, height2 } = $options;
    //
    // console.log($options)
    // console.log(width, $title2, height2 )


    // let user = new Map();
    // user.set("name", "John");
    // user.set("age", "30");
    //
    // console.log(user)


    // let options = {
    //     title: "Menu3",
    //     width: 100,
    //     // height: 200
    // };
    //
    // let {width = 10, height = 20, title} = options;
    //
    // console.log({width, height, title})


    // let options = {
    //     title: "Menu",
    //     height : 500
    // };
    //
    // let {width = prompt("width?"), title = prompt("title?")} = options;
    //
    // console.log({width, title})


    // let options = {
    //     $a: "A",
    //     $w: 2,
    //     $h: 5
    // };
    //
    // var {$h, ...$rest} = options;
    //
    // console.log($h, $rest)


    // ({$a, $w, $h} = {$a: "Menu", $w: 200, $h: 100});
    // console.log($a, $w, $h)


    let options = {
        size: {
            width: 100,
            height: 200
        },
        items: ["Cake", "Donut"],
        extra: true
    };

    // destructuring assignment split in multiple lines for clarity
    // var size, items;

    let {
        size: { // put size here
            width,
            height
        },
        items: [item1, item2], // assign items here
        title = "Menu", // not present in the object (default value is used)
        extra
    } = options;

    console.log(title, item1, item2, width, height, extra)

</script>