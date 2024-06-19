<!DOCTYPE html>
<html>

<body>

<script>
    class Car {
        constructor(name) {
            this.brand = name;
        }

        present() {
            return 'I have a ' + this.brand;
        }
    }

    const mycar = new Car("Ford");
    mycar.present()

    console.log(mycar);
    console.log(Car);
</script>

</body>
</html>
