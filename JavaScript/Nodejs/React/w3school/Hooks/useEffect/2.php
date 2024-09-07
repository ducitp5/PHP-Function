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

        // useEffect(
        //     () => {
        //         const timer = setTimeout(
        //             () => {
        //                 setCount(count + 2);
        //             },
        //             1000
        //         );
        //         return () => clearTimeout(timer); // Cleanup timer
        //
        //     },
        //     [5]
        // ); // <- add empty brackets here

        useEffect(
            () => {
                 setTimeout(
                    () => {
                        setCount(count + 1);
                        // setCount(
                        //     (c) => c + 2
                        // );
                    },
                    1000
                );

                // return () => clearTimeout(timer); // Cleanup timer
            },
            [count]
        );

        return <h1>I've rendered {count} times!</h1>;
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Timer />);

</script>

</body>
</html>
