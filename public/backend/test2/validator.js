function checkMail() {
    ///check số điện thoại mail

    const input = document.getElementById("inputField").value; // Giả sử id của trường nhập liệu là "inputField"

    // Biểu thức chính quy để kiểm tra xem giá trị là địa chỉ email hay số điện thoại
    const emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/;
    const phonePattern = /^\d{10,}$/; // Ở đây giả sử số điện thoại cần có ít nhất 10 chữ số

    if (emailPattern.test(input)) {
        alert("Đây là địa chỉ email hợp lệ.");
        // Xử lý nếu giá trị là địa chỉ email
    } else if (phonePattern.test(input)) {
        alert("Đây là số điện thoại hợp lệ.");
        // Xử lý nếu giá trị là số điện thoại
    } else {
        alert("Giá trị không phải là địa chỉ email hoặc số điện thoại.");
        // Xử lý khi giá trị không phải là email hoặc số điện thoại
    }

}
function checkPassWord() {
    const password = document.getElementById("ipnPasswordSignUp").value;
    const confirmPassword = document.getElementById("ipnRePasswordSignUp").value;
  
    // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp nhau không
    if (password !== confirmPassword) {
      alert("Mật khẩu và xác nhận mật khẩu không khớp. Vui lòng nhập lại.");
      // Đặt các bước xử lý khác nếu cần thiết khi mật khẩu không khớp
    } else {
      // Mật khẩu hợp lệ, tiếp tục xử lý hoặc submit form
    }
  }