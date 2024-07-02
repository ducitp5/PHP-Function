<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="mydiv"> hello </div>


<script type="text/babel">

    const today = new Date();

    function formatDate(date) {
        return new Intl.DateTimeFormat("en-US", { weekday: "long" }).format(date);
    }

    const TodoList = () => {

        return (
            <h1>Danh Sách Công Việc Cho Ngày { formatDate(today) }</h1>
        );
    }

    const container = document.getElementById('mydiv');
    const root = ReactDOM.createRoot(container);
    root.render(<TodoList />)

</script>

</body>
</html>
