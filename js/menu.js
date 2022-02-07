
const iconMenu = document.getElementById("icon-menu");
const mainMenu = document.getElementById("main-menu");

iconMenu.addEventListener("click", () => {
  mainMenu.classList.toggle("menu-show");
 
  if (mainMenu.classList.contains("menu-show")) {
    iconMenu.setAttribute("aria-label", "Cerrar menú");
  } else {
     iconMenu.setAttribute("aria-label", "Abrir menú");
  }
 
 
});