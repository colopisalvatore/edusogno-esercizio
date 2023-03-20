// FUNZIONE PER ABILITARE/NASCONDERE LA PASSWORD
function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleBtn = document.querySelector(".password-toggle button");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleBtn.innerHTML = '<i class="fas fa-eye"></i>';
    } else {
      passwordInput.type = "password";
      toggleBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
    }
  }