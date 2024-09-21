import logo from './logo.svg';
import './App.css';
import App2 from "./components/App";
import { EffectDemo } from "./components/UseEffect";
import {Game} from "./components/Game";
import FoodForm, {FoodFormWithProvider} from "./components/FoodForm"
import {FoodProvider} from "./components/FoodForm/FoodContext";
import RouterExamples, {RouterExamples2} from "./pages/Router-examples";

function App() {

  return (
      <>
          {/*<App2 />*/}
          {/*<Game />*/} {/* dang ko chay duoc*/}
          {/*<FoodFormWithProvider />*/}
          <RouterExamples />
          {/*<RouterExamples2 />*/}
      </>
  );
}

export default App;
