
<script>
    const myVehicle = {
        brand: 'Ford',
        model: 'Mustang',
        color: 'red'
    }

    const updateMyVehicle = {
        type: 'car',
        year: 2021,
        color: 'yellow'
    }

    const myUpdatedVehicle = {...myVehicle, ...updateMyVehicle}

    //Check the result object in the console:
    console.log(myUpdatedVehicle);
</script>

<p>Press F12 and see the result object in the console view.</p>
