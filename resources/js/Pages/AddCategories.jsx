import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

function AddCategory() {
  const [name, setName] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();
    Inertia.post("/new-categories", { name });
  };

  const handleChange = (e) => {
    setName(e.target.value);
  };

  return (
    <div>
      <h1>Add Category</h1>
      <form onSubmit={handleSubmit}>
        <div>
          <label htmlFor="name">Name:</label>
          <input
            type="text"
            id="name"
            name="name"
            value={name}
            onChange={handleChange}
          />
        </div>
        <button type="submit">Add Category</button>
      </form>
    </div>
  );
}

export default AddCategory;
