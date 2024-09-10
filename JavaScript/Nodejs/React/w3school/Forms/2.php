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

    // const { createRoot } = ReactDOM;

    function MyForm() {

        const [name, setName] = useState("abc");

        console.log(111, name, useState );

        const handleSubmit = (reactEvent) => {

            console.log(event, 2222, reactEvent, reactEvent.target, reactEvent.target.value);
            reactEvent.preventDefault();
            alert(`The name you entered was: ${name}`)
        }

        return (
            <form onSubmit = { handleSubmit }>
                <label>Enter your name:
                    <input
                        type = "text"
                        value = { name }
                        onChange = {
                            (e) => {
                                setName(e.target.value);
                                console.log(123, name, e.target.value)
                            }
                        }
                    />
                </label>
                <input type="submit" />
            </form>
        )
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<MyForm />);

</script>

</body>
</html>
