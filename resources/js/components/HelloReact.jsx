import React from "react";
import ReactDOM from "react-dom";

const HelloReact = () => {
    return (
        <div className="text-center">
            <h1>Laravel + React</h1>
        </div>
    );
};

if (document.getElementById("hello-react")) {
    ReactDOM.render(<HelloReact />, document.getElementById("hello-react"));
}

export default HelloReact;
