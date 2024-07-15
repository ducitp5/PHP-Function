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
        let shoot = () => {
            alert("Great Shot!");
        }

        return (
            <>
                <button onClick={ shoot }>Take the shot!</button>
                <div>
                    <button
                        onClick = {
                            () => {
                                alert("222!")
                                alert("333!")
                            }
                        }
                    >
                        Take the shot 2!
                    </button>
                </div>
            </>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Football />);

</script>

</body>
</html>
