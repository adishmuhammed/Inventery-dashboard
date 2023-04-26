import React from "react";
import { Inertia } from "@inertiajs/inertia";

function ProductTable(props) {
    const products = props.products;

    // Function to handle the distributor selection
    const handleDistributorChange = (productId, distributor) => {
        Inertia.post(`/set-distributor/${productId}`, {
            distributor
        });
    };

    // Render table using the products array
    return (
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Sale Price</th>
                    <th>MRP</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Distributor</th>
                </tr>
            </thead>
            <tbody>
                {products.map((product) => (
                    <tr key={product.id}>
                        <td>{product.name}</td>
                        <td>{product.sale_price}</td>
                        <td>{product.mrp}</td>
                        <td>{product.category}</td>
                        <td>{product.quantity}</td>
                        <td>
                            <select
                                value={product.distributor}
                                onChange={(e) =>
                                    handleDistributorChange(
                                        product.id,
                                        e.target.value
                                    )
                                }
                            >
                                <option value="">Select Distributor</option>
                                <option value="indian mail">Indian Mail</option>
                                <option value="express">Express</option>
                                <option value="fast">Fast</option>
                            </select>
                        </td>
                        <td>
                            <a href={`/edit-products/${product.id}/`}>
                                Edit product
                            </a>
                        </td>
                    </tr>
                ))}
            </tbody>
        </table>
    );
}

export default ProductTable;
