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

    let $i = 0;

    function EffectDemo() {
        //State
        const [fullName, setFullName] = useState({name: 'name', familyName: 'family'});
        const [title,setTitle] = useState('useEffect() in Hooks');

        //useEffect
        useEffect(
            () => {
                useEffect(() => {
                    const clickWindow = () => console.log('1')
                    window.addEventListener('click', clickWindow)

                    // return 1 function, sẽ được gọi ngay trước khi componentWillUnmount
                    return () => {
                        window.removeEventListener('click', clicked)
                    }
                }, [])

                return <div>F12 check log của trình duyệt!</div>
            }
        );

        return(
            <div>
                <h1>Title: {title}</h1>
                <h3>Name: {fullName.name}</h3>
                <h3>Family Name: {fullName.familyName}</h3>
            </div>
        );
    };

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<EffectDemo />);

</script>

</body>
</html>
