function myFunction(){
    var element = document.getElementById("myForm");
     element.reset()
  }

function validateForm(event) {
    event.preventDefault();
    const name =
        document.getElementById("name").value;
    const email =
        document.getElementById("email").value;

    const nameError =
        document.getElementById("name-error");
    const emailError = document.getElementById(
        "email-error"
    );
    
    nameError.textContent = "";
    emailError.textContent = "";
    let isValid = true;

    if (name === "" || /\d/.test(name)) {
        nameError.textContent =
            "Please enter your name properly.";
        isValid = false;
    }

    if (email === "" || !email.includes("@")) {
        emailError.textContent =
            "Please enter a valid email address.";
        isValid = false;
    }
    if (isValid) {
        nameError.textContent = "";
        emailError.textContent = "";
    } else {
        setTimeout(() => {
            nameError.textContent = "";
            emailError.textContent = "";
        }, 3000); 
    }

    return isValid;
}
