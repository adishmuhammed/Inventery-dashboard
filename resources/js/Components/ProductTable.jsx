import React from 'react';

function ProductTable(props) {
  const products = props.products;

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
            <td>{product.distributor}</td>
          </tr>
        ))}
      </tbody>
    </table>
  );
}

export default ProductTable;
