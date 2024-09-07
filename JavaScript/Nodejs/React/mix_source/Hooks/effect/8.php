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

    function WindowWidth() {

        const [width, setWidth] = useState(window.innerWidth);
        const [height, setHeight] = useState(window.innerHeight);

        useEffect(
            () => {
                const handleResize = () => {
                    setWidth(window.innerWidth);
                    setHeight(window.innerHeight);
                };

                window.addEventListener('resize', handleResize);

                // Cleanup function to remove event listener
                // return () => {
                //     window.removeEventListener('resize', handleResize);
                // };
            },
            []
        ); // Empty dependency array to run only once on mount

        return (
            <div>
                <h1>Window Width: {width}px</h1>
                <h1>Window Height: {height}px</h1>
            </div>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<WindowWidth />);

</script>

</body>
</html>
