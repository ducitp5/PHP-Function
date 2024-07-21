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

    let { useState } = React;

    function Car() {
        const [car, setCar] = useState({
            brand: "Ford",
            model: "Mustang",
            year: "1964",
            color: "red"
        });

        const updateColor = ($color) => {
            setCar(
                previousState => {

                    let $ob = { ...previousState, color: $color ?? "blue" }

                    console.log(111, previousState, $ob);
                    return $ob;
                }
            );
        }

        // return (
        //     <>
        //         <h1>My {car.brand}</h1>
        //         <p>
        //             It is a {car.color} {car.model} from {car.year}.
        //         </p>
        //         <button
        //             type="button"
        //             onClick={updateColor}
        //         >Blue</button>
        //         <button
        //             type="button"
        //             value="Green"
        //             onClick={
        //                 (reactEvent) => {
        //                     console.log(reactEvent.target.value)
        //                     updateColor(reactEvent.target.value)
        //                 }
        //             }
        //         >Green</button>
        //     </>
        // )

        const colors = ['red', 'green', 'blue'];

        return (
            <>
                <h1>My {car.brand}</h1>
                <p>
                    It is a {car.color} {car.model} from {car.year}.
                </p>
                {
                    colors.map(
                        (color, index) => {
                            console.log(color, index)
                            return (
                                <button
                                    key={color}
                                    type="button"
                                    value={color}
                                    onClick={(reactEvent) => updateColor(reactEvent.target.value)}
                                >
                                    {color.charAt(0).toUpperCase() + color.slice(1)}
                                </button>
                            )
                        }
                    )
                }
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Car />);

</script>

</body>
</html>
