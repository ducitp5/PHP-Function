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

        const shoot = (a) => {
            alert(a);
            console.log(a, event, event.type);

        }

        return (
            <>
                <button onClick={ shoot } children="hahah" />
                <br />

                <button
                    onClick = {
                        ($reactEvent) => {
                            shoot($reactEvent);
                            alert(123)
                        }
                    }
                >
                    shot 2!
                </button>
                <br />

                <button onClick = { () => shoot(event) }>shot 3!</button>
                <br />

                <button
                    onClick = {
                        ($reactEvent) => {
                            shoot(event)
                            console.log(234, $reactEvent)
                        }
                    }
                >
                    shot 4!</button>
                <br />

                <button
                    onClick = {
                        () => shoot("Goal!")
                    }
                >
                    Take the shot!
                </button>
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Football />);

</script>

</body>
</html>
