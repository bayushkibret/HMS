document.getElementById("login-form").addEventListener("submit", function(event) {
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    if (username === "" || password === "") {
        event.preventDefault();
        alert("Please enter both username and password.");
    }
});
