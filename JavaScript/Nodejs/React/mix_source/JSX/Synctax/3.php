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
        const weekday = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];

        let $day = weekday[new Date().getDay()];

        console.log(3333, new Date().getDay())

        return (
            <div>
                Today is { $day}
            </div>
        )

    };

    const container = document.getElementById('mydiv');
    const root = ReactDOM.createRoot(container);
    root.render(<App />)

</script>

</body>
</html>
