<script>
    // for (let e of [1, 2, 3, 4]) console.log(e)

    // for (let c of 'hello') console.log(c)

    let range = {
        from: 1,
        to: 5,
        [Symbol.iterator]: () => {
            return {
                current: this.from,
                last: this.to,
                next: () => {
                    if (this.current <= this.last) {
                        return { done: false, value: this.current++ };
                    } else {
                        return { done: true };
                    }
                }
            };
        }
    }

    console.log(1111, range, Symbol, Symbol.iterator)

    for(let num of range) console.log(4444, num)

    console.log(222222)
</script>
