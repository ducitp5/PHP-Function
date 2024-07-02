<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="mydiv"> hello </div>


<script type="text/babel">

    // import "./style.css";

    // const App = () => {
    //     return (
    //         <img
    //             className="avatar"
    //             src="7vQD0fPs.jpg"
    //             alt="Gregorio Y. Zara"
    //         />
    //     );
    // };

    const App = () => {
        const avatar = "7vQD0fPs.jpg";
        const description = "Gregorio Y. Zara";

        return (
            <img
                className="avatar"
                src={avatar}
                alt={description}
            />
        );
    };

    const container = document.getElementById('mydiv');
    const root = ReactDOM.createRoot(container);
    root.render(<App />)

</script>

</body>
</html>
