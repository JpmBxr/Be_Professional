/* for contact page */

function validateField(id) {
  var fieldValue = document.getElementById(id).value;

  if (fieldValue === "") {
    document.getElementById(id).style.borderColor = "red";
  } else {
    document.getElementById(id).style.borderColor = "green";
  }
}

function validateForm() {
  var name = document.getElementById("name").value;
  var mobile = document.getElementById("mobile").value;
  var subject = document.getElementById("subject").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  if (
    name === "" ||
    email === "" ||
    subject === "" ||
    mobile.length < 10 ||
    message === ""
  ) {
    alert(
      "Please fill in all required fields and ensure the phone number is at least 10 characters."
    );
    return false;
  }
  return true;
}
