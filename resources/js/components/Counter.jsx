import React, { useState } from "react";
import ReactDOM from "react-dom";

const Counter = () => {
    const [count, setCount] = useState(0);

    const handleIncrement = () => {
        setCount((prevCount) => prevCount + 1);
    };

    const handleDecrement = () => {
        setCount((prevCount) => prevCount - 1);
    };

    return (
        <div className="d-flex justify-content-center align-items-center grid gap-3">
            <button onClick={handleDecrement} className="btn btn-sm btn-danger">
                -
            </button>
            <span>{count}</span>
            <button
                onClick={handleIncrement}
                className="btn btn-sm btn-success"
            >
                +
            </button>
        </div>
    );
};

if (document.getElementById("counter")) {
    ReactDOM.render(<Counter />, document.getElementById("counter"));
}

export default Counter;
