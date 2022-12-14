//Loading User Data Variables
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const button = document.getElementById('buttonSubmit');
const successfulInputsCounterGlobal = 4;

//Execution
document.getElementById("buttonSubmit").addEventListener("click", function(event) {
    console.log("notLoadingScripts");
    if (checkInputs() !== successfulInputsCounterGlobal) {
        event.preventDefault();
    }
    event.preventDefault();
});

//User Front Input Validation {16-69}
function checkInputs() {

    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    let successfulInputsCounter = 0;

    if (usernameValue === '' || usernameValue === null) {
        setErrorFor(username, 'Username cannot be blank');
    } else if (usernameValue.length <= 6){
        setErrorFor(username, 'not enough characters')
    }else {
        setSuccessFor(username);
        successfulInputsCounter++;
    }

    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
        successfulInputsCounter++;
    }

    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    } else if(isPassword(passwordValue)  !== true) {
        setErrorFor(password, 'not enough characters');
    }
    else {
        setSuccessFor(password);
        successfulInputsCounter++;
    }
    if (password2Value === '') {
        setErrorFor(password2, 'Password cannot be blank');
    } else if(passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords do not match');
    } else{
        setSuccessFor(password2);
        successfulInputsCounter++;
    }
    if (successfulInputsCounter === successfulInputsCounterGlobal)  {
        button.className = 'form valid';
    }
    else {
        button.className = 'form invalid';
    }
    return successfulInputsCounter;
}
//Additional Validation Functionality
function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
    return false;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    return true;
}
function setRedFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control red';
    small.innerText = message;
    return true;
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPassword(password) {
    const passwordCharacters = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    return !!password.match(passwordCharacters);
}
//Successful registration submitted validation