<!DOCTYPE html>
<html>

<body>


<script type="module">

    // App.js
    import { greet, calculateSum } from './commonFunctions';
    import { loggerMixin } from './commonFunctions';

    class App {

        $attr = "A";

        constructor() {
            Object.assign(this, loggerMixin); // Mixin methods into the class instance
        }

        expressionFunction = function (){

        }

        arrowFunction = () => {}

        sayHello() {
            console.log(greet("John")); // Output: Hello, John!
        }

        addNumbers() {
            console.log(calculateSum(5, 7)); // Output: 12
        }
    }

    const app = new App();

    console.log(App, app)
    app.sayHello();
    app.addNumbers();


</script>

</body>
</html>
