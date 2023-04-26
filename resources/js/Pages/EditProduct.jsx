import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { InertiaLink } from "@inertiajs/inertia-react";

const EditProduct = ({ product, categories }) => {
    const [name, setName] = useState(product.name);
    const [salePrice, setSalePrice] = useState(product.sale_price);
    const [mrp, setMrp] = useState(product.mrp);
    const [category, setCategory] = useState(product.category);
    const [quantity, setQuantity] = useState(product.quantity);
    const [distributor, setDistributor] = useState(product.distributor);

    const handleSubmit = (e) => {
        e.preventDefault();

        Inertia.post(`/products/${product.id}`, {
            name,
            sale_price: salePrice,
            mrp,
            category,
            quantity,
        });
    };

    return (
        <div>
            <h1>Edit Product</h1>
            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="name">Name:</label>
                    <input
                        type="text"
                        id="name"
                        value={name}
                        onChange={(e) => setName(e.target.value)}
                    />
                </div>
                <div>
                    <label htmlFor="sale_price">Sale Price:</label>
                    <input
                        type="number"
                        id="sale_price"
                        value={salePrice}
                        onChange={(e) => setSalePrice(e.target.value)}
                    />
                </div>
                <div>
                    <label htmlFor="mrp">MRP:</label>
                    <input
                        type="number"
                        id="mrp"
                        value={mrp}
                        onChange={(e) => setMrp(e.target.value)}
                    />
                </div>
                <div>
                    <label htmlFor="category">Category:</label>
                    
                    <select
                        name="category"
                        id="category"
                        value={category}
                        onChange={(e) => setCategory(e.target.value)}
                    >
                        {categories.map((category) => (
                            <option key={category.id} value={category.id}>
                                {category.name}
                            </option>
                        ))}
                    </select>
                </div>
                <div>
                    <label htmlFor="quantity">Quantity:</label>
                    <input
                        type="number"
                        id="quantity"
                        value={quantity}
                        onChange={(e) => setQuantity(e.target.value)}
                    />
                </div>
                <div>
                    <button type="submit">Save Changes</button>
                    <InertiaLink href={"/"}>Cancel</InertiaLink>
                </div>
            </form>
        </div>
    );
};

export default EditProduct;
