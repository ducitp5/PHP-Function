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

    function Timer() {
        const [count, setCount] = useState(0);

        useEffect(
            () => {
                setTimeout(
                    () => {
                        setCount((count) => count + 1);
                        // console.log(44444, count)
                    },
                    1000000
                );
                // setCount((count) => count + 1);
                console.log('abc')

            }
        );

        return (
            <>
                { console.log('begin render - ', count)}
                <h1>I've rendered {count} times!</h1>
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Timer />);

</script>

</body>
</html>
