<script>

    function* makeRangeIterator(start = 0, end = Infinity, step = 1) {
        let iterationCount = 0;
        for (let i = start; i < end; i += step) {
            iterationCount++;
            yield i;
        }
    }

    range = makeRangeIterator(1, 10, 2);

    $r = range.next()
    // {value: 1, done: false}

    console.log(222222, $r)

    $r = range.next()
    console.log(222222, $r)


</script>
