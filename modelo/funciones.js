function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}


function formularioLibros() {

    window.open("../vista/formulario_libros.html", "_self");

}

function consultar() {

    window.open("../vista/listar_libros.php", "_self");

}