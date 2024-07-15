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

    function Football() {

        let shoot = (e) => {
            alert("Great Shot!");
            console.log(e)
        }

        const shoot2 = (a, b) => {

            console.log(a, b)
            /*
            'b' represents the React event that triggered the function,
            in this case the 'click' event
            */
        }

        return (
            <>
                <button onClick={ shoot }>shot 1!</button>
                <br/>
                <button
                    onClick = {
                        (reactEvent) => {
                            shoot2(event, reactEvent)
                            console.log(1111, event, reactEvent)
                        }
                    }
                >
                    shot 2!
                </button>
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Football />);

</script>

</body>
</html>
