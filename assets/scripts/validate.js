var captcha; //global

//Validate with JS
function clean() {
    email = document.getElementById("email").value;
    message = document.getElementById("message").value;
    from = document.getElementById("from").value;
    input = document.getElementById("submit").value;

    if (email === "" || message ==="" || from ==="") {
        alert("Please Fill Out All Fields.");
        return false;
    }

    if(!validate()){alert("Incorrect Captcha.");return false;}//if captcha wrong
}

//Create Unique Captcha Code
function captchaGen() {
    document.getElementById("submit").value = "";

    captcha = document.getElementById("image");
    var newcapt = "";

    var charList ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789!@#$%^&*"; //exclude 0 bc its hard to distinguish from O

    for (let i= 1; i<5;i++) {
        newcapt += charList.charAt(Math.random() * charList.length);
    }
    captcha.innerHTML = newcapt; //update HTML to show the current captcha
}

//Check if entered captcha is correct
function validate() {
    var input= document.getElementById("submit").value;
    if (input=== captcha.innerHTML) {
        captchaGen();
        return true;
    }
    else {
        captchaGen();
        return false;
    }
}