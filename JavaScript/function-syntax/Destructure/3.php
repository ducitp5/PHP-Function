<!DOCTYPE html>
<html>

<body>

<p id="demo"></p>

<script>
    const vehicleOne = {
        brand: 'Ford',
        model: 'Mustang',
        type: 'car',
        year: 2021,
        color: 'red'
    }

    let $b = myVehicle(vehicleOne);

    function myVehicle({type, color, brand, model}) {
        const message = 'My ' + type + ' is a ' + color + ' ' + brand + ' ' + model + '.';

        document.getElementById("demo").innerHTML = message;

        console.log(vehicleOne);
        return message;
    }

    let $b2 = myVehicle2(vehicleOne);

    function myVehicle2($ob) {

        console.log(222, $ob);
    }

    console.log($b)
</script>

</body>
</html>
