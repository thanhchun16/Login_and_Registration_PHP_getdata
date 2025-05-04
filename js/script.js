const logregBox = document.querySelector(".logreg-box");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");

registerLink.addEventListener("click", () => {
  logregBox.classList.add("active");
});
loginLink.addEventListener("click", () => {
  logregBox.classList.remove("active");
});

window.addEventListener("DOMContentLoaded", () => {
  if (localStorage.getItem("showLogin") === "true") {
    logregBox.classList.remove("active"); // Hiện form đăng nhập
    // localStorage.removeItem("showLogin");
  }
});
