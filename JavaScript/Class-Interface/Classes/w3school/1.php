<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Classes</h1>
<p>Creating two car objects from a car class:</p>

<p id="demo"></p>

<script>
    class Car {
        $a = 35;
        $b = null;
        $c = "";

        constructor($n, $y, $c = 'last year') {
            this.N      = $n;
            this.Y      = $y;
            this.$c     = $c;
        }

        getSymbol(date = 'abc') {
            console.log('ggg - ' +this.toLocaleString())
            return this.N + " fabrique en " +this.Y +" and age : " +this.$a;
        }

        getAge = ($age = 20) => {
            console.log('gaaa - ' +this.toString())
            return 1960 + $age + this.$c;
        }

        hello = function($param = 'aa') {
            return $param;
        }
    }

    let myCar1 = new Car("Ford", 2014);

    console.log( Car, myCar1 );

    document.getElementById("demo").innerHTML =
        myCar1.N + " --- " + myCar1.getSymbol() + " - " +myCar1.getAge(5);

    console.log(111, myCar1)
    console.log(111, myCar1.getSymbol())
    console.log(222, myCar1.getAge)
    console.log(333, myCar1.getAge(5))
    console.log(4433, myCar1.hello())



    console.log(1122, Car.toLocaleString())
</script>

</body>
</html>
