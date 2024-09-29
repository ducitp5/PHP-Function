import { memo } from "react";

const Todos = ({ todos, setTodos }) => {

    console.log("child render" , todos, setTodos);

    const incrementTodo = (index) => {
        setTodos((prevTodos) =>
            prevTodos.map((todo, i) =>
                i === index ? { ...todo, count: todo.count + 1 } : todo
            )
        );
    };

    return (
        <>
            <h2>My Todos</h2>
            {todos.map((todo, index) => {
                return (
                    <div key={index}>
                        <p>
                            {todo.text} - Count: {todo.count}
                            <button onClick={() => incrementTodo(index)}>+</button>
                        </p>
                    </div>
                );
            })}
        </>
    );
};

// export default Todos;
export default memo(Todos);