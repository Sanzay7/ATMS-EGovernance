

let form = document.contact_form,
    fname = form.fname,
    email = form.email;



form.addEventListener("submit", function(e){
    if(fname.value.length == 0) {
        fname.nextElementSibling.innerText = "Fullname is empty!";
        e.preventDefault();
    } else {
        fname.nextElementSibling.innerText = "";
    }

    if(email.value.length == 0) {
        email.nextElementSibling.innerHTML = "<strong>Email is empty!</strong>";
        e.preventDefault();
    } else {
        email.nextElementSibling.innerHTML = "";
    }
});

email.addEventListener("keyup", function() {
    if(this.value.indexOf("@") == -1 ) {
        this.nextElementSibling.innerText = "One '@' symbol is required!";
    } else if(this.value.indexOf(".") == -1 ) {
        this.nextElementSibling.innerText = "One '.' symbol is required!";
    } else if(this.value.indexOf("@") != this.value.lastIndexOf("@") ) {
        this.nextElementSibling.innerText = "Two or more '@' symbol is not acceptable!";
    } else {
        this.nextElementSibling.innerText = "";
    }
});