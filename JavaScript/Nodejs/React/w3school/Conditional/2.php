<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>

<div id="root"> hello 333</div>

<script type="text/babel">

    function Garage(props) {

        const cars = props.cars;

        console.log(props)

        let content;

        if (cars.length > 0) {
            content = <h2>You have {cars.length} cars in your garage.</h2>;
        } else {
            content = <h2>Your garage is empty.</h2>;
        }

        return (
            <>
                <h1>Garage</h1>
                { content }
            </>
        );
    }

    let cars = ['Ford', 'BMW', 'Audi'];
    // cars = [];

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Garage cars={cars} />);

</script>

</body>
</html>
