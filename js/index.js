function validation() {

   var name = document.getElementById("name").value;
   var age = document.getElementById("age").value;
   var country = document.getElementById("country").value;
   var male = document.getElementById("male").checked;
   var female = document.getElementById("female").checked;
   var language = document.querySelectorAll(".language:checked");

   let nameValid = false;
   let ageValid = false;
   let countryValid = false;
   let genderValid = false;
   let languageValid = false;



   if (name == "") {
      document.getElementById("name_error").innerHTML = "Fill the name";
   }
   else {
      document.getElementById("name_error").innerHTML = "";
      nameValid = true;
   }

   if (age == "") {
      document.getElementById("age_error").innerHTML = "Fill the age";
   }
   else {
      document.getElementById("age_error").innerHTML = "";
      ageValid = true;
   }

   if (country == "") {
      document.getElementById("country_error").innerHTML = "Select country";
   }
   else {
      document.getElementById("country_error").innerHTML = "";
      countryValid = true;
   }

   if (male == false && female == false) {
      document.getElementById("gender_error").innerHTML = "Select gender";
   }
   else {
      document.getElementById("gender_error").innerHTML = "";
      genderValid = true;
   }

   if (language.length < 1) {
      document.getElementById("language_error").innerHTML = "Select language";
   }
   else {
      document.getElementById("language_error").innerHTML = "";
      languageValid = true;
   }

   if (nameValid && ageValid && countryValid && genderValid && languageValid) {
      document.getElementById("validation_error").innerHTML = "Validation done";
      document.getElementById("validation_error").classList.remove('text-danger');
      document.getElementById("validation_error").classList.add('text-success');
      return true;
   }
   else {
      document.getElementById("validation_error").classList.remove('text-success');
      document.getElementById("validation_error").classList.add('text-danger');
      document.getElementById("validation_error").innerHTML = "Validation not done";
      return false;
   }
}  