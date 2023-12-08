function clean() {
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var from = document.getElementById("from").value;

    if (email === "" || message === "" || from === "") {
        alert("Please Fill Out All Fields.");
        return false;
    }
}