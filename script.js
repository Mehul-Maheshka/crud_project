function validateForm() {
  var gender = document.getElementById("gender").value;
  var genderError = document.getElementById("genderError");
  if (gender !== "Male" && gender !== "Female" && gender !== "Other") {
      genderError.innerHTML = "Please enter a valid gender (Male/Female/Other)";
      return false;
  }
  return true;

 
}