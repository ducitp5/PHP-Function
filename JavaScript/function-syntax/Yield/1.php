<script>

    function* foo() {
        let index = 0;
        while (true) {
            const result = yield index++;
            if (result) {
                index = 0;
            }
        }
    }

    const bar = foo();

    console.log(bar.next())         // {value: 0, done: false}
    console.log(bar.next())         // {value: 1, done: false}
    console.log(bar.next())         // {value: 2, done: false}
    console.log(bar.next(true))     // {value: 0, done: false}
    console.log(bar.next())         // {value: 1, done: false}


</script>
