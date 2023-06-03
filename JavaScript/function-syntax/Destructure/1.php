<script>

    // [$a, $b] = "abcd"; // ["a", "b", "c"]
    //
    // let [one, two, three] = new Set([1, 2, 3, 4]);
    //
    // console.log($a, $b)
    //
    // console.log(one, two, three)


    // let user = {};
    // [user.name, user.surname] = "John Smith".split(' ');
    //
    // console.log(user)


    // $user = {
    //     name: "John",
    //     age: 30
    // };
    //
    // console.log(Object.entries($user))
    // // loop over keys-and-values
    // for ( [key, value] of Object.entries(user)) {
    //     console.log(`${key}:${value}`); // name:John, then age:30
    // }


    // [name = "Guest", surname = "Anonymous"] = ["Julius"];
    //
    // console.log(name, surname)


    [name = prompt('name is ?'), surname = prompt('surname is ?')] = ["Julius"];

    console.log(name, surname)

</script>