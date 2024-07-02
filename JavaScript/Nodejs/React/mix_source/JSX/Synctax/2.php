<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>
<body>

<div id="mydiv"> hello </div>


<script type="text/babel">

    const App = () => {
        const $randomAge = Math.floor(Math.random() * 10);
        const imgSrc =
            "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png";

        return (
            <div>
                Hello, my name is MindX. I'm {$randomAge} years old.
                <img src={imgSrc} />
            </div>
        );
    };

    const container = document.getElementById('mydiv');
    const root = ReactDOM.createRoot(container);
    console.log(root);

    let $render = root.render(<App />);
    console.log(3344, App, App(), <App />)

</script>

</body>
</html>
