<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>

<body>

<div id="mydiv"></div>

<script type="text/babel">
    function Hello() {

        return (
            <div className="app">
                <h1>Hello, World!</h1>
            </div>
        );

        return React.createElement(
            "div",
            { className: "app" },
            "Hello, World! 333"
            // React.createElement("h1", {}, "Hello, World! 444")
        );


    }

    const container = document.getElementById('mydiv');

    console.log(container, container.nodeType);
    console.log(ReactDOM);

    const root = ReactDOM.createRoot(container);

    console.log(2222, root );
    console.log(3333, Hello(), <Hello />)

    root.render(<Hello />)
</script>

</body>
</html>
