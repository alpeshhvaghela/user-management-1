function validation() {

   var name = document.getElementById("name").value;
   var age = document.getElementById("age").value;
   var country = document.getElementById("country").value;
   var male = document.getElementById("male").checked;
   var female = document.getElementById("female").checked;
   var language =document.querySelectorAll("input[name='language']:checked");



   if (name == "") {
      document.getElementById("name_error").innerHTML = "Fill the name";
   }

   if (age == "") {
      document.getElementById("age_error").innerHTML = "Fill the age";
   }

   if (country == "") {
      document.getElementById("country_error").innerHTML = "Select country";
   }

   if (male == false && female == false) {
      document.getElementById("gender_error").innerHTML = "Select Gender";
   }
   
   if(language.length < 1){
      document.getElementById("language_error").innerHTML ="Select language";
    }

}