var valorInicial="";
$(document).on("click", "#submit-login", function(e) {
    e.preventDefault();
    var usuario =new Object();
    usuario.correo=$("#username").val();
    usuario.clave=$("#password").val();
    var ajax = __ajax2("https://noanlearning.space/login/validar",JSON.stringify(usuario));
    ajax.done(function(response){
       var login=JSON.parse(response);
       if (login.estado==1) {
        $("#submit-login").val("Bienvenido Administrador");
        setTimeout(function(){
            $("#submit-login").val("Entrar");
            window.location="https://noanlearning.space/admin/";
        },2000);
       }else if(login.estado==2){
        $("#submit-login").val("Bienvenido Profesor");
        setTimeout(function(){
            $("#submit-login").val("Entrar");
            window.location="https://noanlearning.space/profesores/";
        },2000);
            $("#submit-login").val("Bienvenido Alumno");
       }else if(login.estado==3){
            setTimeout(function(){
                $("#submit-login").val("Entrar");
                window.location="https://noanlearning.space/alumnos/";
            },2000);
            
       }else{
        $("#submit-login").val("Error De Credenciales");
       }
    });
});

$(document).on("click","#switch",function(e){
    var cambio = $(this).val();
    valorInicial=cambio;
    $("#tituloLogin").html("Login " + cambio);
});

function __ajax2(url, dato) {
    var ajax = $.ajax({
        type: 'POST',
        url: url,
        data: { 'data': dato }
    })
    return ajax;
}
