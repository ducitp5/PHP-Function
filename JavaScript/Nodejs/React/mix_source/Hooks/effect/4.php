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

    function Example() {

        const [count, setCount] = useState(0);

        useEffect(
            () => {
                document.title = `You clicked ${count} times`;
                // setCount(count+1)
                console.log(count);
            }
        );

        return (
            <div>
                <p>You clicked {count} times</p>
                <button onClick={() => setCount(count + 1)}>
                    Click me
                </button>
            </div>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Example atr1='atr11' atr2={'atr22'} />);

</script>

</body>
</html>
