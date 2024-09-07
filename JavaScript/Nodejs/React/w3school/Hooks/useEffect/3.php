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

    let { useState, useEffect } = React;

    function Counter() {

        const [count, setCount] = useState(0);
        const [calculation, setCalculation] = useState(0);

        useEffect(
            () => {
                setCalculation(count * 2);
            },
            [count]
        ); // <- add the count variable here

        return (
            <>
                <p>Count: {count}</p>
                <button
                    onClick={
                        () => {
                            setCount(
                                (c) => c + 1
                            );
                            console.log(count)
                        }
                    }
                >
                    +
                </button>
                <p>Calculation: {calculation}</p>
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Counter />);

</script>

</body>
</html>
