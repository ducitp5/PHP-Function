import React,{ useContext } from 'react';
import FoodContext from './FoodContext';

const NameComponent = () =>{
    //Retrieve context data
    const food = useContext(FoodContext);

    console.log('NameComponent - ', food)
    return (
        <>
            <div style={{ marginTop: "30px" }}>
                <h2 className="is-size-4">
                    <strong>Name</strong>: {food.name}
                </h2>
            </div>
        </>
    )
}

export default NameComponent;
