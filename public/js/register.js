// public/js/register.js
const registerButton = document.getElementById('registerButton');

registerButton.addEventListener('click', () => {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const data = {
        name: name,
        email: email,
        password: password
    };

    fetch('/api/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
        // Handle success or error here
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error here
    });
});
