$(document).on("click", "#submit-login", function(e) {
    e.preventDefault();

    var parametros = {
        "username": $("#username").val(),
        "password": $("#password").val()
    }
    
    $.ajax({
        url: "https://noanlearning.space/login",
        type: "POST",
        cache: false,
        data: parametros,
        succes: function(data) {
switch(data){   
    case 1:
        window.location.href = "/indexAdmin.php";
       break;
       case 2:
        window.location.href = "/indexDocente.php";
        break;
        case 3:
        window.location.href = "/indexEstudiante.php";
        break;
        case 0:
        window.alert("datos de inicio de sesion incorrectos, verifique");
        
        break
}
        }
    });
});