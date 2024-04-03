function search() {
    var input = document.getElementById("searchInput").value.toLowerCase(); // Convert input to lowercase for case insensitivity

    var files = ["contactus.php", "privacy.html", "feedform.php", "signup.php", "index.php", "1st.html", "Spa___ce.html", "Mission.html", "Management.html", "webdev.html","privacy.html"];

    // Check if input matches any specific filenames
    if (files.includes(input + ".php")) {
        window.location.href = input + ".php"; 
        return;
    }
    else if (files.includes(input + ".html")){
        window.location.href = input + ".html";
        return;
    }

    switch (input) {
        case "home":
            window.location.href = "SpaceHomepage.html";
            return;
        case "games":
            window.open("stellargame2.html", "_blank");
            window.open("cosgame1.html", "_blank");
            break;
        case "merchandise":
            window.open("home.html", "_blank");
            break;
        case "follow":
            window.location.href = "followpage.html";
            return;
        case "login":
            window.location.href = "index.php";
            return;
        case "experiments":
            window.location.href = "1st.html";
            return;
        case "quiz":
            window.location.href = "spa___ce.html";
            return;
    }

    // If input doesn't match any specific filenames or keywords, alert the user
    alert("Input does not match any file.");
    document.getElementById("searchInput").value = ""; // Clear the input field
}
