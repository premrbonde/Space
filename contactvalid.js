function validateEmptyFields() {
        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var subject = document.getElementById('subject').value.trim();
        var message = document.getElementById('message').value.trim();

        if (name === '' || email === '' || subject === '' || message === '') {
            alert('Please fill in all fields.');
            // name = document.getElementById('name').value="Please fill in all fields";
            // email = document.getElementById('email').value="Please fill in all fields";
            // subject = document.getElementById('subject').value="Please fill in all fields";
            // message = document.getElementById('message').value="Please fill in all fields";
            return false;
        }
        return true;
    }

    function validateEmail() {
        var email = document.getElementById('email').value.trim();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            //alert('Please enter a valid email address.');
            email = document.getElementById('email').value="Please Enter Valid Email";
            return false;
        }
        return true;
    }

    function validateMessageLength() {
        var message = document.getElementById('message').value.trim();

        if (message.length < 10) {
            //alert('Message should be at least 10 characters long.');
            message = document.getElementById('message').value="Message should be at least 10 characters long";
            return false;
        }
        return true;
    }

    function validateNameLength() {
        var name = document.getElementById('name').value.trim();

        if (name.length < 3) {
            //alert('Name should be at least 3 characters long.');
            name = document.getElementById('name').value="Name should be at least 3 characters long";
            return false;
        }
        return true;
    }

    function validateSubjectLength() {
        var subject = document.getElementById('subject').value.trim();

        if (subject.length < 5) {
            //alert('Subject should be at least 5 characters long.');
            subject = document.getElementById('subject').value="Subject should be at least 5 characters long";
            return false;
        }
        return true;
    }
