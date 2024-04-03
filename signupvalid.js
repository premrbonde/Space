function validateForm() {
    var username = document.getElementById('uname').value;
    var password = document.getElementById('password').value;
    var rePassword = document.getElementById('re_password').value;
    var name = document.getElementById('name').value;
    var address = document.getElementById('uaddr').value;
    var mobile = document.getElementById('umobno').value;

    if (username == "") {
        alert("Username must be filled out");
        return false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long");
        return false;
    }

    if (password !== rePassword) {
        alert("Passwords do not match");
        return false;
    }

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    if (address == "") {
        alert("Address must be filled out");
        return false;
    }

    if (mobile.length != 10 || isNaN(mobile)) {
        alert("Invalid mobile number");
        return false;
    }
}