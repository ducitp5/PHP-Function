
<script>
    (function () {
        // We keep these variables private inside this closure scope

        var myGrades = ['a', 9, 'b'];
        // var myGrades = [1, 3, 4, 6, 7, 9];

        var average = function() {
            var total = myGrades.reduce(
                function(accumulator, currentValue, currentIndex, arr) {

                    console.log(accumulator, currentValue, currentIndex, arr);

                    // return accumulator + currentValue;
                    return 't' + accumulator;
                },
                // 0
                'k'
            );

            console.log(total);
            return 'Your average grade is ' + total / myGrades.length + '.';
        }

        console.log(1111, average());

    }());

</script>
