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

    function Car(props) {
        return <li>I am a { props.brand }</li>;
    }

    function Garage() {

        const cars = ['Ford', 'BMW', 'Audi'];

        let res = cars.map(

            (car, index, array) => {

                console.log(car, index, array)

                return car + index;
            }
        )

        console.log(res)

        return (
            <>
                <h1>Who lives in my garage?</h1>
                <ul>
                    {
                        cars.map(
                            (car, index) => {
                                return   <Car brand={car} key={index} />
                            }
                        )
                    }
                </ul>
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Garage />);

</script>

</body>
</html>
