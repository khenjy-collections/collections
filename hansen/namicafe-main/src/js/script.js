const toggle = document.querySelector("#button-toggle");

const sidebar = document.querySelector("#sidebar");

const main = document.querySelector("#main-content");

// document.getElementById("button-toggle").addEventListener("click", () => {
//   // when the button-toggle is clicked, it will add/remove the active-sidebar class
//   document.getElementById("sidebar").classList.toggle("active-sidebar");

//   // when the button-toggle is clicked, it will add/remove the active-main-content class
//   document
//     .getElementById("main-content")
//     .classList.toggle("active-main-content");
// });

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("active-sidebar");

  main.classList.toggle("active-main-content");
});
