import React, { createContext, useState } from 'react'
// Initiate Context
const FoodContext = createContext();
// Provide Context
export const FoodProvider = ({ children }) => {

    const [name, setName] = useState('Trà Xanh');
    const [location, setLocation] = useState('Thái Nguyên');

    let $values = { name, location, setName, setLocation };
    console.log('food context - ', $values);

    return (
        <FoodContext.Provider value={ $values }>
            {children}
        </FoodContext.Provider>
    )
}

export default FoodContext;
