const eyeIcon = document.querySelector(".eye-icon");
const input = eyeIcon.previousElementSibling;

eyeIcon.onclick = () => {
  if (input.type == "password") {
    input.type = 'text';
    eyeIcon.className = 'bi bi-eye-slash eye-icon';
  } else {
    input.type = 'password';
    eyeIcon.className = 'bi bi-eye eye-icon';
  }
  input.focus();
}
