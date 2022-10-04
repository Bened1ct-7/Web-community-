const form = document.querySelector('.form');
const continueBtn = form.querySelector('form input[type=submit]');
const errorText = document.querySelector('.errorText');


form.addEventListener('submit', (e) => {
  e.preventDefault();
  
})

continueBtn.addEventListener('click', () => {
  let request = new XMLHttpRequest();
  request.open('POST', 'php/signup.php', true);
  
  request.addEventListener('readystatechange', () => {
    if (request.readyState === 4 && request.status === 200) {
      let data = request.response;
      if (data == "success") {
        errorText.textContent = "Registered successfully. You can now login";
        errorText.classList.replace('alert-danger', 'alert-success')
        errorText.style.display = 'block';
        setTimeout(() => window.location.href = "login.php", 1000)
      } else {
        errorText.textContent = data;
        errorText.style.display = 'block';
      }
    } else if (request.readyState === 4) {
      alert('Error');
    }
  })
  
  let formData = new FormData(form);
  request.send(formData);
})
