<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>

<div id="root"></div>

<script type="text/babel">

    const { useState, useEffect } = React;

    function DataFetcher() {
        let [count, setCount] = useState(0);
        const [data, setData] = useState([]);
        const [loading, setLoading] = useState(true);

        useEffect(() => {

            // setCount(count + 1);
            console.log(2222, count);

            fetch('https://jsonplaceholder.typicode.com/posts')
                .then(response => response.json())
                .then(data => {
                    setData(data);
                    setLoading(false);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    setLoading(false);
                });
        }, [count]); // Empty dependency array to run only once on mount

        if (loading) {
            return <h1>Loading...</h1>;
        }

        function refresh(e) {

            console.log(3333, count)
            // count = count + 1;
            setCount(count + 1)
            console.log(4444, count)
        }

        return (
            <div>
                <h1>Title: {count}</h1>
                <button onClick={ (e) => refresh(e)}>refresh</button>
                <h1>Data Fetched</h1>
                <ul>
                    {data.slice(0, 10).map(item => (
                        <li key={item.id}>{item.title}</li>
                    ))}
                </ul>
            </div>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<DataFetcher />);

</script>

</body>
</html>
