// document.getElementById('submit').addEventListener('click', function(event) {
//     event.preventDefault();
//     var givenName = document.getElementById('givenName').value;
//     var sn = document.getElementById('sn').value;
//     var sAMAccountName = document.getElementById('sAMAccountName').value;
//     var mail = document.getElementById('mail').value;
//     var telephoneNumber = document.getElementById('telephoneNumber').value;
//     var title = document.getElementById('title').value;
//     var department = document.getElementById('department').value;
//     var company = document.getElementById('company').value;
//     if (givenName == "" || sn == "" || sAMAccountName == "" || mail == "") {
//         alert("Les champs Prénom, Nom de famille, Nom d'utilisateur, Adresse e-mail sont requis");
//         return false;
//       }
// if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3}|\.local|\.lan)+$/.test(mail)) {
//   alert("L'adresse email n'est pas valide");
//   return false;
// }
// Ajouter ici toutes les autres vérifications de champ que vous souhaitez effectuer
// Si tous les champs sont valides, soumettre le formulaire
//   document.getElementById("createUserForm").submit();
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

// Lecture du json pour recuperer les services et les entreprises

// fetch("entites.json")
//   .then(reponse => reponse.json())
//   .then(data => {
//     let entites = data;
//     console.log(entites);
//     var company = document.getElementById("company");
//     var department = document.getElementById("department");

//     // Ajout des options au select à partir du fichier JSON
//     for (var i = 0; i < entites.length; i++) {
//       // if (!entites[i].company || !entites[i].service) continue;
//       var optionCompany = document.createElement("option");
//       optionCompany.value = entites[i].company;
//       optionCompany.text = entites[i].company;

//       var optionDepartment = document.createElement("option");
//       optionDepartment.value = entites[i].service;
//       optionDepartment.text = entites[i].service;

//       company.appendChild(optionCompany);
//       department.appendChild(optionDepartment);
//     }

//     // Gestion des événements de saisie pour la recherche
//     department.addEventListener("input", function () {
//       var departmentSaisi = this.value;
//       var companyTrouvee = false;
//       for (var i = 0; i < entites.length; i++) {
//         if (entites[i].service.toLowerCase() === departmentSaisi.toLowerCase()) {
//           company.value = entites[i].company;
//           companyTrouvee = true;
//           break;
//         }
//       }
//       if (!companyTrouvee) {
//         company.value = "";
//       }
//     });

//     company.addEventListener("input", function () {
//       var companySaisi = this.value;
//       var departmentTrouve = false;
//       for (var i = 0; i < entites.length; i++) {
//         if (entites[i].company.toLowerCase() === companySaisi.toLowerCase()) {
//           department.value = entites[i].service;
//           departmentTrouve = true;
//           break;
//         }
//       }
//       if (!departmentTrouve) {
//         department.value = "";
//       }
//     });
//   });






