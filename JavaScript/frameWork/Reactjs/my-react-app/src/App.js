import logo from './logo.svg';
import './App.css';
import App2 from "./components/App";
import { EffectDemo } from "./components/UseEffect";
import {Game} from "./components/Game";
import FoodForm from "./components/FoodForm"
import {FoodProvider} from "./components/FoodForm/FoodContext";

function App() {

  return (
      <>
          {/*<App2 />*/}
          {/*<Game />*/} {/* dang ko chay duoc*/}
          <FoodProvider>
              <FoodForm />
          </FoodProvider>

      </>
  );
}

export default App;
