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
        const [fullName, setFullName] = useState({name: 'name', familyName: 'family', compteur : 0});
        const [title,setTitle] = useState('useEffect() in Hooks');

        //useEffect
        useEffect(
            () => {
                ++$i;
                console.log($i, title, fullName);
                setFullName({name:'TrungHC',familyName: 'HCT', compteur : $i});
                // setFullName(previousState => {
                //
                //     let $ob = { ...previousState, compteur : $i }
                //
                //     console.log(111, previousState, $ob);
                //     return $ob;
                // });
                console.log(1111, title, fullName);
                setTitle('abc');
            },
            [fullName.name]
        );

        return(
            <div>
                <h1>Title: {title}</h1>
                <h3>Name: {fullName.name}</h3>
                <h3>Family Name: {fullName.familyName}</h3>
                <h3>compteur: {fullName.compteur}</h3>
            </div>
        );
    };

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<EffectDemo />);

</script>

</body>
</html>
