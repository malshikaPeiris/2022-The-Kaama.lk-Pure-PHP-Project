function validateForm() {

    //["psw"]["psw-repeat"]["name"]["contact"]["add"]["mail"]
    if (document.forms["reg-form"]["uname"].value == "") {
        alert("Please Fill User Name");
        return false;
    }


    
    if (document.forms["reg-form"]["psw"].value == "") {
        alert("Please Fill Password");
        return false;
    }
    if (document.forms["reg-form"]["psw-repeat"].value == "") {
        alert("Please Fill Repeat Password");
        return false;
    }
    if (document.forms["reg-form"]["psw-repeat"].value != document.forms["reg-form"]["psw"].value) {
        alert("Repeat Password invalid");
        return false;
    }


    if (document.forms["reg-form"]["contact"].value == "") {
        alert("Please Fill Phone number");
        return false;
    }

    if (isNaN(parseFloat(document.forms["reg-form"]["contact"].value))) {
        alert("Please Fill Phone numbers only");
        return false;
    }

    return validateEmail();

}
function  validateEmail() {
    var booking_email = $('input[name="email"]').val();

    if (booking_email == '' || booking_email.indexOf('@') == -1 || booking_email.indexOf('.') == -1) {

        alert("Please Fill Email correctly");
        return false;

    }
    return true;
}