<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>

<div id="root"></div>

<script type="text/babel">

    const { useState, useEffect } = React;

    function Counter() {
        const [count, setCount] = useState(0);
        const [doubleCount, setDoubleCount] = useState(0);

        useEffect(
            () => {
                setDoubleCount(count * 2);
            },
            [count]
        ); // The effect runs when `count` changes

        return (
            <div>
                <h1>Count: {count}</h1>
                <h1>Double Count: {doubleCount}</h1>
                <button onClick={() => setCount(count + 1)}>Increment</button>
            </div>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Counter />);

</script>

<script>
    let $w = window;

    console.log(

        $w.parseInt('015'),
        111111,
    );

    console.log(scrollBy())
</script>

</body>
</html>
