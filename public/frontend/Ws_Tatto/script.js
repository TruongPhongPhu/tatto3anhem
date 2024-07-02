// document.getElementById('booking-form').addEventListener('submit', function (event) {
//     event.preventDefault();

//     // Get form data
//     var formData = {
//         name: document.getElementById('name').value,
//         email: document.getElementById('email').value,
//         phone: document.getElementById('phone').value,
//         service: document.getElementById('service').value,
//         datetime: document.getElementById('datetime').value,
//         message: document.getElementById('message').value
//     };

//     // Perform form validation
//     if (formData.name.trim() === '' || formData.email.trim() === '' || formData.phone.trim() === '' || formData.service === '') {
//         alert('Please fill in all required fields.');
//         return;
//     }

//     // Submit the form or perform other actions
//     console.log('Form data:', formData);
//     alert('Your booking has been submitted!');
//     document.getElementById('booking-form').reset();
//     window.location.href = './home.html'; // Chuyển hướng về trang home.html
// });
// document.getElementById('datetime').addEventListener('input', function () {
//     var selectedDateTime = new Date(this.value);
//     var currentDateTime = new Date();

//     if (selectedDateTime < currentDateTime) {
//         alert('You cannot select a date in the past.');
//         this.value = currentDateTime.toISOString().slice(0, 16);
//     }
//     // Gửi dữ liệu booking đến Laravel
//     fetch('/booking', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
//         },
//         body: JSON.stringify({
//             // Dữ liệu booking
//         })
//     })
//         .then(response => response.json())
//         .then(data => {
//             // Xử lý khi booking thành công
//             if (data.success) {
//                 alert('Booking successful! Click OK to return to the home page.');
//                 window.location.href = '/home.html'; // Chuyển hướng về trang home.html
//             } else {
//                 // Xử lý khi booking thất bại
//                 alert('Booking failed. Please try again.');
//             }
//         })
//         .catch(error => {
//             // Xử lý lỗi
//             console.error('Error:', error);
//             alert('An error occurred. Please try again later.');
//         });
// });


    
