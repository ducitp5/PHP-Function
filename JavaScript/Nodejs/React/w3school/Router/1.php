<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <script src='https://unpkg.com/react@16.3.1/umd/react.production.min.js'></script>
    <script src='https://unpkg.com/react-dom@16.3.1/umd/react-dom.production.min.js'></script>
    <script src='https://unpkg.com/babel-standalone@6.26.0/babel.js'></script>
    <script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>

</head>
<body>

<div id='root'></div>

<script type='text/babel'>
    const Link = ReactRouterDOM.Link,
        Route = ReactRouterDOM.Route,
        HashRouter = ReactRouterDOM.HashRouter;

    const App = props => (
        <HashRouter>
            <ul>
                <li><Link to="">TO HOME</Link></li>
                <li><Link to='a'>TO A</Link></li>
                <li><Link to="/b">TO B</Link></li>
                <li><Link to="c/d">TO CD</Link></li>
            </ul>

            <Route path="/" exact component={Home} />
            <Route path="/a" component={A} />
            <Route path="/b" component={B} />
            <Route path="/c/d" component={CD} />
            <Route path="*" component={NoPage} />
        </HashRouter>
    )

    const Home = props => <h1>HOME</h1>
    const A = props => <h1>A</h1>
    const B = props => <h1>B</h1>
    const NoPage = props => <h1>404</h1>

    function CD() {
        return (
            <div>
                {console.log("begin render 2- ")}
                <p>CD </p>
            </div>
        )
    }

    ReactDOM.render(<App />, document.getElementById('root'));
</script>
</body>
</html>