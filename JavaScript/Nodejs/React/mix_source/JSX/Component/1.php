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

    const container = document.getElementById('mydiv');
    const root = ReactDOM.createRoot(container);

    class Car extends React.Component {

        render() {
            console.log(8888, this);
            return <h2>Hi, I am a class Car!</h2>;
        }
    }
    root.render(<Car  />)

    function Carf(props) {
        console.log(props);

        return <h2>I am a {props.color} Car!</h2>;
    }

    console.log(Car);

    root.render(<Carf color="red" />)

</script>

</body>
</html>
