var sender = document.forms['formValidation']['sender'];
var email = document.forms['formValidation']['email'];
var phone = document.forms['formValidation']['phone'];
var message = document.forms['formValidation']['message'];

var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var phone_error = document.getElementById('phone_error');
var message_error = document.getElementById('message_error');
// SETTING ALL EVENT LISTENERS
sender.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
message.addEventListener('blur', messageVerify, true);
// validation function
function Validate() {
  // validate name
  if (sender.value == "") {
    sender_error.textContent = "Proszę podać imię";
    sender.focus();
    return false;
  }

  // validate email
  if (email.value == "") {
    email_error.textContent = "Email jest wymagany";
    email.focus();
    return false;
  }

  if (!email.value.includes('@')) {
    email_error.textContent = "Podaj poprawny adres email";
    email.focus();
    return false;
  }

  if (message.value == "") {
    message_error.textContent = "Wiadomość jest wymagana";
    message.focus();
    return false;
  }

}
// event handler functions
function nameVerify() {
  if (sender.value != "") {
   sender_error.innerHTML = "";
   return true;
 }
}
function emailVerify() {
  if (email.value != "") {
    email_error.innerHTML = "";
}
}

function messageVerify() {
  if (message.value != "") {
  	message_error.innerHTML = "";
  	return true;
  }
}
