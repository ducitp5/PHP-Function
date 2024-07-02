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

    const parseStyleString = (styleString) => {
        return styleString.split(';').reduce((acc, style) => {
            if (style.trim()) {
                const [key, value] = style.split(':').map(item => item.trim());
                const camelCaseKey = key.replace(/-([a-z])/g, g => g[1].toUpperCase());
                acc[camelCaseKey] = value;
            }
            return acc;
        }, {});
    };

    const TodoList = () => {

        let $a = "abc";
        let $color = 'yellow';

        let styleString = "background-color: black; color: pink;";
        let styleObject = parseStyleString(styleString);

        let $styleOb = {
            backgroundColor: "black",
            color: $color,
            fontSize: "300%", // Use camelCase and a valid unit
        }

        let $fontSize = "50px";
        return (
            <ul
                style={
                    {
                        backgroundColor: "green",
                        color: $color,
                        fontSize: $fontSize, // Corrected font shorthand with a font family
                    }
                }

                // style = { styleObject }

                // style = { $styleOb }
            >
                <li> Cải thiện : { $a }</li>
                <li> Chuẩn bị bài giảng về aeronautics</li>
                <li> Làm việc trên động cơ chạy bằng cồn</li>
            </ul>
        );
    }

    const container = document.getElementById('mydiv');
    const root = ReactDOM.createRoot(container);
    root.render(<TodoList />)

</script>

</body>
</html>
