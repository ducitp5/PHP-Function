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

    function MissedGoal() {
        return <h1>MISSED!</h1>;
    }

    function MadeGoal() {
        return <h1>Goal!</h1>;
    }


    function Goal(props) {
        const isGoal = props.isGoal;
        if (isGoal) {
            return <MadeGoal/>;
        }
        return <MissedGoal/>;
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Goal isGoal={false} />);

</script>

</body>
</html>
