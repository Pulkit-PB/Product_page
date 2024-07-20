function validateForm() {
  // Validate username length
  var username = document.getElementById("username").value;
  if (username.length > 30) {
      alert("Username must be at most 30 characters.");
      return false;
  }

  // Validate password length
  var password = document.getElementById("password").value;
  if (password.length < 8 || password.length > 15) {
      alert("Password must be between 8 and 15 characters.");
      return false;
  }

  // Validate email format
  var email = document.getElementById("email").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
      alert("Invalid email format.");
      return false;
  }

  return true;
}
