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

    function Car() {
        return <h2>I am a Car!</h2>;
    }

    function Garage() {
        return (
            <>
                <h1>Who lives in my Garage?</h1>
                <Car />
            </>
        );
    }

    console.log(123)

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Garage />);

</script>

</body>
</html>
