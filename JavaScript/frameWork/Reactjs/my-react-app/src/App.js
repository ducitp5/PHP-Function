import React, { useState } from 'react';
import logo from './logo.svg';
import './App.css';
import App2 from "./components/App";
import { EffectDemo } from "./components/UseEffect";
import {Game} from "./components/Game";
import FoodForm, {FoodFormWithProvider} from "./components/FoodForm"
import {FoodProvider} from "./components/FoodForm/FoodContext";
import RouterExamples, {RouterExamples2} from "./pages/Router-examples";
import Memo from "./components/memo/Memo";
import useMemo from "./components/memo/useMemo";
import UseMemo from "./components/memo/useMemo2";
import PersonList from "./components/PersonList";

function App() {

    const [showCpn, setShowCpn] = useState(true); // State to toggle component

    const toggleComponent = () => {
        setShowCpn(prevState => !prevState); // Toggle the component
    };

    const $Cpn = <UseMemo />;

    return (
        <>
            <button onClick={toggleComponent}>
                {showCpn ? "Hide RouterExamples" : "Show RouterExamples"}
            </button>

            {showCpn ? $Cpn : null}

            <PersonList />
            {/*<App2 />*/}
            {/*<Game />*/} {/* dang ko chay duoc*/}
            {/*<FoodFormWithProvider />*/}
            {/*<RouterExamples />*/}
            {/*<RouterExamples2 />*/}
        </>
    );
}

export default App;
