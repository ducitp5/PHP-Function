import { useState, useEffect } from "react";

let $i = 0;

const CustomHook1 = () => {

    const [data, setData] = useState(null);

    function fetchData(){
        fetch("https://jsonplaceholder.typicode.com/todos")

            .then((res) => { console.log(res); return res.json();  } )
            .then((data) => setData(data))
            .then( () => { $i++; console.log($i)  } )
            .then( () => console.log(222))
        ;
    }

    useEffect(() => {
        fetchData();
    }, []);

    // fetchData();

    return (
        <>
            {data &&
                data.map(
                    (item) => {
                        return <p key={item.id}>{item.title}</p>;
                    }
                )
            }
        </>
    );
};

export default CustomHook1;