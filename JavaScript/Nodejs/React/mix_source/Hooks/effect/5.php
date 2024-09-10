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

    class Example extends React.Component {

        constructor(props) {

            console.log(0, props);
            super(props);
            console.log(11, this);

            this.state = {
                count: 2,
                isOnline: null
            };
            this.handleStatusChange = this.handleStatusChange.bind(this);

            console.log(22, props, this);
        }

        componentDidMount() {
            document.title = `You clicked ${this.state.count} times`;
            console.log(1111, document.title)
        }

        componentDidUpdate() {
            document.title = `You clicked ${this.state.count} times`;
            console.log(2222, document.title)
        }

        handleStatusChange(status) {
            console.log(this.state);
            this.setState({isOnline: status.isOnline});
        }

        render() {
            console.log(2233, this)

            {
                if (this.state.isOnline === null) {
                    return 'Loading...';
                }
            }

            return (
                <div>
                    <p>You clicked {this.state.count} times</p>
                    <button
                        onClick = {
                            () => {
                                this.setState({ count: this.state.count + 1 });
                                console.log(3333, this)
                            }
                        }
                    >
                        Click me
                    </button>
                </div>
            );
        }
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Example atr1='atr11' atr2={'atr22'} />);

</script>

</body>
</html>
