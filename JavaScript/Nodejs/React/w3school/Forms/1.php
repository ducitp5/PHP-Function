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

    let { useState, Children } = React;
    let useState2 = React.useState
    let children2 = React.Children

    console.log(useState, Children);
    console.log('----------------');
    console.log(useState2, children2);

    // let cs = React.useState
    // console.log(useState);
    // console.log(React.useState);
    // console.log(cs);
    //
    // console.log(React);
    //
    // const { createRoot } = ReactDOM;
    // console.log(createRoot);
    // console.log(ReactDOM);


    // const { createRoot } = ReactDOM;

    function MyForm() {
        const [name, setName] = useState("");

        return (
            <form>
                <label>Enter your name:
                    <input
                        type="text"
                        value={name}
                        onChange={(e) => setName(e.target.value)}
                    />
                </label>
            </form>
        )
    }


    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<MyForm />);

</script>

</body>
</html>
