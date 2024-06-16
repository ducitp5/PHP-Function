<script>
    // Home Made Iterable
    function myNumbers() {
        let n = 0;
        return {
            next: function() {
                n += 10;
                return {
                    value :n,
                    done  :false
                };
            }
        };
    }

    // Create Iterable
    const a = myNumbers();

    console.log(a.next()); // Returns 10
    console.log(a.next().value); // Returns 20
    console.log(a.next()); // Returns 30
</script>
