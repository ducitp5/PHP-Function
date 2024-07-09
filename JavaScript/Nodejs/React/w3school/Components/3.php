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

    function Car(propss) {
        console.log(propss);

        return <h2>I am a { propss.brand.model }!</h2>;
    }

    function Garage() {

        const carInfo = { name: "Ford", model: "Mustang" };

        return (
            <>
                <h1>Who lives in my garage?</h1>
                <Car brand={ carInfo } />
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Garage />);

</script>

</body>
</html>
