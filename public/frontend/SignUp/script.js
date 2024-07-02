const registerSubmit = document.getElementById('registerBtnSubmit');
const inputElement = document.getElementById("inputField"); // Giả sử id của trường nhập liệu là "inputField"
const errElement = inputElement.parentElement.querySelector('.error-msg')
const loginBtn = document.querySelector("#login");
const registerBtn = document.querySelector("#register");
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");

registerSubmit.addEventListener('click', function (e) {
    e.preventDefault();

    checkMail();
});

inputElement.addEventListener('blur', function (e) {
    errElement.innerHTML = '';
    inputElement.style.border = 'none';
})

function checkMail() {
    ///check số điện thoại mail
    const inputValue = inputElement.value; // Lấy giá trị người dùng nhập vào

    // Biểu thức chính quy để kiểm tra xem giá trị là địa chỉ email hay số điện thoại
    const emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/;
    const phonePattern = /^\d{10,}$/; // Ở đây giả sử số điện thoại cần có ít nhất 10 chữ số

    if (emailPattern.test(inputValue) || phonePattern.test(inputValue)) {
        return;
    } else {
        errElement.innerText = 'Email hoặc số điện thoại không hợp lệ'
        inputElement.style.border = '1px solid red';
    }
}


function togglePasswordVisibility(input, button) {
    // Toggle the password input type
    const currentType = input.getAttribute('type');
    input.setAttribute('type', currentType === 'password' ? 'text' : 'password');

    // Toggle the button icon
    button.classList.toggle('fa-eye');
    button.classList.toggle('fa-eye-slash');
}

function handleInput(errorMsg) {
    // Clear the error message
    errorMsg.textContent = 'password không khop';
};


import axios from 'axios';

const registerUser = async (userData) => {
    try {
        const response = await axios.post('/api/register', userData);
        console.log(response.data);
    } catch (error) {
        console.error(error);
    }
};

// Example usage
const userData = {
    name: 'John Doe',
    email: 'john@example.com',
    password: 'password123'
};

registerUser(userData);


