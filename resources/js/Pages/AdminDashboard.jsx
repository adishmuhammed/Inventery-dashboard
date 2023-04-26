import { useState, useEffect } from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

export default function AdminDashboard({ users }) {
  const [userData, setUserData] = useState(users);

  useEffect(() => {
    fetch('/users')
      .then(response => response.json())
      .then(data => setUserData(data))
      .catch(error => console.error(error));
  }, []);

  const editUser = (userId) => {
    // Navigate to the edit user page
    window.location.href = `/users/${userId}/edit`;
  };

  const toggleUserStatus = (userId, isActive) => {
    // Send a PATCH request to toggle the user's active status
    fetch(`/users/${userId}/toggle-status`, {
      method: 'PATCH',
      body: JSON.stringify({ active: !isActive }),
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      },
    })
      .then(response => response.json())
      .then(data => {
        // Update the user data in state
        setUserData(prevState => prevState.map(user => user.id === userId ? data : user));
      })
      .catch(error => console.error(error));
  };

  const viewProducts = (userId) => {
    // Navigate to the view products page for the selected user
    window.location.href = `/users/${userId}/products`;
  };

  const createUser = () => {
    // Navigate to the create user page
    window.location.href = '/users/create';
  };

  return (
    <div>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
            <th>View Products</th>
          </tr>
        </thead>
        <tbody>
          {userData.map((user) => (
            <tr key={user.id}>
              <td>{user.name}</td>
              <td>{user.email}</td>
              <td>{user.active ? 'Active' : 'Inactive'}</td>
              <td>
                <button onClick={() => editUser(user.id)}>Edit</button>
                <button onClick={() => toggleUserStatus(user.id, user.active)}>
                  {user.active ? 'Deactivate' : 'Activate'}
                </button>
              </td>
              <td>
                <button onClick={() => viewProducts(user.id)}>View Products</button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
      <InertiaLink href="/users/create">Create User</InertiaLink>
    </div>
  );
}
