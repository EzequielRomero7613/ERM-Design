//boton para ir arriba
document.getElementById("arriba").addEventListener("click", function () {
  window.scrollTo({
    top: 0,
  });
});

//boton hamburguesa
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}



//boton de wpp
$(document).ready(function () {
    $(".btnWhatsApp").click(function () {
      $("#cajadecontactoWhatsApp").toggle("slow");
    });
});

