<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>yes</title>
</head>
<body>
<div> he loo</div>
<!-- built files will be auto injected -->

<script>
    (function () {
        // We keep these variables private inside this closure scope

        var myGrades = [93, 95, 88, 0, 55, 91];

        var average = function() {
            var total = myGrades.reduce(function(accumulator, item) {
                return accumulator + item}, 0);

            return 'Your average grade is ' + total / myGrades.length + '.';
        }

        var failing = function(){
            var failingGrades = myGrades.filter(function(item) {
                return item < 70;});

            return 'You failed ' + failingGrades.length + ' times.';
        }

        console.log(failing());

    }());

</script>
</body>
</html>
