function submitForm() {
                    
    var name = document.getElementById("name").value;
    var lastname = document.getElementById("lastname").value;
    var date = document.getElementById("date").value;
    var ville = document.getElementById("city").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var genre = document.getElementById("genre").value;
    var loisirs = document.getElementById("loisir").value;
    var button = document.getElementById("submit").value;

    
    var formData = new FormData();
    formData.append("name_user", name);
    formData.append("lastname", lastname);
    formData.append("date", date);
    formData.append("city", ville);
    formData.append("email", email);
    formData.append("password", password);
    formData.append("genre", genre);
    formData.append("loisir", loisir);  
    formData.append("submit", button);

    fetch("http://localhost:8000/MVC.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
    
        if (data.success) {
            alert('Vous êtes bien inscrit');
        } else {    
            alert('Erreur lors de l\'enregistrement');
        }
    })
    .catch(error => {
        console.error('Erreur lors de la requête Fetch:', error);
    });
}
function login() {
    
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var button = document.getElementById("submit").value;
    
    var formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);
    formData.append("submit", button);

    fetch('http://localhost:8000/MVC.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        
if (data.success) {
alert('Connexion réussie!');
} else {
alert('Identifiants incorrects!', data.message);
}
})
.catch(error => {
                console.error('Erreur lors de la requête Fetch:', error);
            });        

        }
