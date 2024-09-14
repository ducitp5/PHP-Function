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

    let { useState } = React;

    function FavoriteColor() {

        console.log(111, color);

        const [color, setColor] = useState('abc');
        const [count, setCount] = useState(0);

        console.log(222, color, count);

        let changeColor = (icolor) => {
            console.log(color +'-s11-' +icolor)
            setColor(icolor)
            console.log(color +'-s22-' +icolor)
        }

        console.log(333, color);

        return (
            <>
                {     console.log('begin render - ', color)     }
                <h1>My favorite color is {color}!</h1>

                <button
                    type="button"
                    onClick = {
                        () => {
                            console.log('f1 blue - ', color)
                            setColor("blue");
                            console.log('f2 blue - ', color)
                        }
                    }
                >
                    Blue
                </button>

                <button
                    type="button"
                    onClick={
                        () => {
                            console.log('f1 red - ', color)
                            changeColor("red");
                            console.log('f2 red - ', color)
                        }
                    }
                >
                    Red
                </button>

                <br/>

                <h1>Count : {count}!</h1>

                <button
                    type="button"
                    onClick={
                        () => {
                            setCount(count + 1);
                            console.log('count - ', count)
                        }
                    }
                >
                    count
                </button>
                {     console.log('end render')     }
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<FavoriteColor />);

</script>

</body>
</html>
