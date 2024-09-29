import { useState } from "react";
import ReactDOM from "react-dom/client";
import Todos from "./Todos";

// const Todos = ({ todos }) => {
//     console.log("child render");
//     return (
//         <>
//             <h2>My Todos</h2>
//             {todos.map((todo, index) => {
//                 return <p key={index}>{todo}</p>;
//             })}
//         </>
//     );
// };

export default function Memo() {

    const [count, setCount] = useState(0);
    const [todos, setTodos] = useState([
        { text: "todo 1", count: 0 },
        { text: "todo 2", count: 0 },
    ]);

    const increment = () => {
        setCount((c) => c + 1);
    };

    return (
        <>
            <Todos todos={todos} setTodos={setTodos} />
            <hr />
            <div>
                Count: {count}
                <button onClick={increment}>+</button>
            </div>
        </>
    );
};

