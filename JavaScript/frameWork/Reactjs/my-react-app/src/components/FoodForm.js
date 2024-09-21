import './FoodForm/FoodForm.css';
import React,{ useContext } from 'react';
import FoodContext, {FoodProvider} from "./FoodForm/FoodContext";
import NameComponent from "./FoodForm/NameComponent";
import LocationComponent from "./FoodForm/LocationComponent";

const FoodForm = () => {
    // Retrieve context data
    const food = useContext(FoodContext);

    console.log('FoodForm', FoodContext, 111, FoodContext.Provider.$$typeof, 222, food)
    return (
        <div className = "food-form" >
            <div className="input-item">
                <label className="label" style={{ marginRight: "28px" }}>Update Name: </label>
                <input
                    className="input"
                    onChange={e => food.setName(e.target.value)}
                />
            </div>

            <div className="input-item">
                <label className="label" >Update Location: </label>
                <input
                    className="input"
                    onChange={e => food.setLocation(e.target.value)}
                />
            </div>
            <NameComponent />
            <LocationComponent />
        </div>
    )
}
export default FoodForm;

function FoodFormWithProvider() {

    return (
        <FoodProvider>
            <FoodForm />
        </FoodProvider>
    );
}

export { FoodFormWithProvider };
