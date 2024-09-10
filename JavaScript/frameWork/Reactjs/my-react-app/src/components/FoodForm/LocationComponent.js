import React, { useContext } from 'react';
import FoodContext from './FoodContext';

const LocationComponent = () => {
    // Retrieve context data
    const food = useContext(FoodContext);
    // console.log('LocationComponent', food)

    return (
        <div style={{ marginTop: "30px", marginLeft: "50px"}}>
            <h2 className="is-size-4">
                <strong>Location</strong>: {food.location}
            </h2>
        </div>
    )
}

export default LocationComponent;