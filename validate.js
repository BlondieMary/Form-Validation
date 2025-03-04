function validateForm() {
    let name = document.getElementById("name");
    let surname = document.getElementById("surname");
    let bdate = document.getElementById("bdate");
    let valid = true;
    
    let namePattern = /^[A-Za-z]+$/;
    
    if (!name.value.match(namePattern)) {
        name.classList.add("is-invalid");
        valid = false;
    } else {
        name.classList.remove("is-invalid");
    }
    
    if (!surname.value.match(namePattern)) {
        surname.classList.add("is-invalid");
        valid = false;
    } else {
        surname.classList.remove("is-invalid");
    }
    
    if (!bdate.value) {
        bdate.classList.add("is-invalid");
        valid = false;
    } else {
        bdate.classList.remove("is-invalid");
    }
    
    return valid;
}
