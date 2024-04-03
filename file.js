function validateForm() {
    // Reset previous error messages
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var isValid = true;
    if (username.trim() == "") {
        document.getElementById("usernameError").innerHTML = "Please enter a username";
        isValid = false;
    }
    if (email.trim() == "") {
        document.getElementById("passwoedError").innerHTML = "Please enter a passwoed";
        isValid = false;
    if (password.trim() == "") {
        document.getElementById("passwordError").innerHTML = "please confirm password";
        isValid = false;
        if (password.trim() == "") {
            document.getElementById("passwordError").innerHTML = "Username already taken";
            isValid = false;
            if (password.trim() == "") 
                document.getElementById("passwordError").innerHTML = "Password did not match";
                isValid = false;
    }}}
    return isValid;
}
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}