// const formulaire = document.getElementById('form');
// formulaire.addEventListener('submit', function(event) {
//     event.preventDefault();
//     var givenName = document.getElementById('givenName').value;
//     var sn = document.getElementById('sn').value;
//     var sAMAccountName = document.getElementById('sAMAccountName').value;
//     var mail = document.getElementById('mail').value;
//     var telephoneNumber = document.getElementById('telephoneNumber').value;
//     var ville  = document.getElementById('l').value;
//     var postalCode = document.getElementById('postalCode').value;
//     var streetAddress = document.getElementById('streetAddress').value;
//     var Password = document.getElementById('password').value;
//     var PasswordConfirmation = document.getElementById('confirmPassword').value;
//     var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{12,}$/;
//     var memberOf = document.getElementById('memberOf').value;
//     var description = document.getElementById('description').value;
//     var country = document.getElementById('co').value;
//     var fonction = document.getElementById('title').value;
//     var service = document.getElementById('department').value;
//     var entreprise = document.getElementById('company').value;
//     var division = document.getElementById('division').value;
//     var manager = document.getElementById('manager').value;
//     var employeeID = document.getElementById('employeeID').value;
//     var dateEntre = document.getElementById('extensionAttribute2').value;
//     var exchange = document.getElementById('extensionAttribute15').value;
//     var expire = document.getElementById('accountExpires').value;
//     var sousService = document.getElementById('extensionAttribute1').value;
//     var intranet = document.getElementById('extensionAttribute3').value;
//     var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

    // Vérification du champ prénom
    // if (givenName == "") {
    //     alert("Le champ prénom est obligatoire");
    //     return false;
    // }
    // // Vérification du champ nom
    // if (sn == "") {
    //     alert("Le champ nom est obligatoire");
    //     return false;
    // }
    // // Vérification du champ nom d'utilisateur
    // if (sAMAccountName == "") {
    //     alert("Le champ nom d'utilisateur est obligatoire");
    //     return false;
    // }
    // // Vérification du champ email
    // if (mail == "") {
    //     alert("Le champ email est obligatoire");
    //     return false;
    // }
    // // Vérification du champ téléphone
    // if (telephoneNumber == "") {
    //     alert("Le champ téléphone est obligatoire");
    //     return false;
    // }
    // // Vérification du champ ville
    // if (ville == "") {  
    //     alert("Le champ ville est obligatoire");
    //     return false;
    // }
    // // Vérification du champ code postal
    // if (postalCode == "") {
    //     alert("Le champ code postal est obligatoire");
    //     return false;
    // }
    // // Vérification du champ adresse
    // if (streetAddress == "") {
    //     alert("Le champ adresse est obligatoire");
    //     return false;
    // }
    // // Vérification du champ mot de passe
    // if (Password == "") {
    //     alert("Le champ mot de passe est obligatoire");
    //     return false;
    // }
    // // Vérification du champ confirmation mot de passe
    // if (PasswordConfirmation == "") {
    //     alert("Le champ confirmation mot de passe est obligatoire");
    //     return false;
    // }
    // // Vérification du champ groupe
    // if (memberOf == "") {
    //     alert("Le champ groupe est obligatoire");
    //     return false;
    // }
    // // Vérification du champ description
    // if (description == "") {
    //     alert("Le champ description est obligatoire");
    //     return false;
    // }
    // // Vérification du champ pays
    // if (country == "") {
    //     alert("Le champ pays est obligatoire");
    //     return false;
    // }
    // // Vérification du champ fonction
    // if (fonction == "") {
    //     alert("Le champ fonction est obligatoire");
    //     return false;
    // }
    // // Vérification du champ service
    // if (service == "") {
    //     alert("Le champ service est obligatoire");
    //     return false;
    // }
    // // Vérification du champ entreprise
    // if (entreprise == "") { 
    //     alert("Le champ entreprise est obligatoire");
    //     return false;
    // }
    // // Vérification du champ division
    // if (division == "") {
    //     alert("Le champ division est obligatoire");
    //     return false;
    // }
    // // Vérification du champ manager
    // if (manager == "") {
    //     alert("Le champ manager est obligatoire");
    //     return false;
    // }
    // // Vérification du champ ID employé
    // if (employeeID == "") {
    //     alert("Le champ ID empoyé est obligatoire");
    //     return false;
    // }
    // // Vérification du champ date d'entrée
    // if (dateEntre == "") {
    //     alert("Le champ date d'entrée est obligatoire");
    //     return false;
    // }
    // // Vérification du champ exchange
    // if (exchange == "") {
    //     alert("Le champ exchange est obligatoire");
    //     return false;
    // }
    // // Vérification du champ expiration
    // if (expire == "") {
    //     alert("Le champ expiration est obligatoire");
    //     return false;
    // }
    // Vérification du champ mot de passe
    // if (passwordRegex.test(Password) == false ) {
    //   // var error = document.getElementById('passError');
    //   // error.style.borderColor = "red";
    //   // error.textContent = "Le mot de passe doit contenir au moins 12 caractères dont une majuscule, une minuscule et un chiffre";
    //    alert("Le mot de passe doit contenir au moins 12 caractères dont une majuscule, une minuscule et un chiffre");
    //     return false;
    // }
    // // Vérification du champ confirmation mot de passe
    // if ( PasswordConfirmation != Password) {
    //     alert("Le mot de passe et la confirmation ne correspondent pas");
    //     return false;
    // }
    // // Vérification du champ email
    // if (emailRegex.test(mail) == false) {
    //     alert("L'adresse email n'est pas valide");
    //     return false;
    // }
    // // Vérification du champ téléphone
    // if (telephoneNumber.length < 10) {
    //     alert("Le numéro de téléphone n'est pas valide");
    //     return false;
    // }
    // // Vérification du champ code postal
    // if (postalCode.length < 5) {
    //     alert("Le code postal n'est pas valide");
    //     return false;
    // }
    // // Vérification du champ ID employé
    // if (employeeID.length < 5) {
    //     alert("L'ID employé n'est pas valide");
    //     return false;
    // }
    // // Vérification du champ date d'entrée
    // if (dateEntre < Date.now()) {
    //     alert("La date d'entrée n'est pas valide");
    //     return false;
    // }
    // // Vérification du champ expiration
    // if (expire < Date.now()) {
    //     alert("La date d'expiration n'est pas valide");
    //     return false;
    // }

    // // Vérification du champ intranet 
    // if (intranet == "") {
    //     alert("Le champ intranet est obligatoire");
    //     return false;
    // }
    // // Vérification du champ sous-service 
    // if (sousService == "") {
    //     alert("Le champ sous-service est obligatoire");
    //     return false;
    // }


// envoie du formulaire
// formulaire.submit();

    

// });

//import du fichier JSON


fetch("cities.json")
  .then(reponse => reponse.json())
  .then(data => {
    let cities = data;

    // Récupération du select et de l'input
    var select = document.getElementById("l");
    var postalCodeInput = document.getElementById("postalCode");
    var villeImput = document.createElement("input");
    villeImput.placeholder = "Entrez votre ville";
    villeImput.type = "text";
    select.appendChild(villeImput);

    villeImput.addEventListener("input", function () {
      var villeSaisie = this.value;
      var villeTrouvee = false;
      for (var i = 0; i < cities.length; i++) {
        if (cities[i].name.toLowerCase() === villeSaisie.toLowerCase()) {
          select.value = cities[i].name;
          postalCodeInput.value = cities[i].zip_code;
          villeTrouvee = true;
          break;
        }
      }
      if (!villeTrouvee) {
        select.value = "";
        postalCodeInput.value = "";
      }
    });


    // Ajout des options au select à partir du fichier JSON
    for (var i = 0; i < cities.length; i++) {
      var option = document.createElement("option");
      option.value = cities[i].name;
      option.text = cities[i].name;
      select.appendChild(option);
    }
    //Écouteur d'événements pour le changement de la valeur du select
    select.addEventListener("change", function () {
      var selectedCity = select.value;
      for (var i = 0; i < cities.length; i++) {
        if (cities[i].name === selectedCity) {
          postalCodeInput.value = cities[i].zip_code;
          break;
        }
      }
    });

  })








