<!DOCTYPE html>
<html>
<head>
    <?php include('../include_head.php')    ?>
</head>
<body>

<div id="mydiv"></div>

<script type="text/babel">
    function Hello() {
        return <h1>Hello World!</h1>;
    }

    const container = document.getElementById('mydiv');

    console.log(container, container.nodeType);
    console.log(ReactDOM);

    const root = ReactDOM.createRoot(container);

    console.log(2222, root );

    root.render(<Hello />)
</script>

</body>
</html>
