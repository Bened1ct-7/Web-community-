const form = document.querySelector("form");
const continueBtn = document.querySelector('form input[type=submit]');
const errorText = document.querySelector('.errorText');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  
})


continueBtn.addEventListener('click', () => {
  let request = new XMLHttpRequest();
  request.open('POST', 'php/add.php', true);
  
  request.addEventListener('readystatechange', () => {
    if (request.readyState === 4 && request.status === 200) {
      let data = request.response;
      if (data == "success") {
        errorText.textContent = "Added Successfully";
        errorText.classList.replace('alert-danger', 'alert-success');
        errorText.style.display = 'block';
        setTimeout(() => window.location.href = "index.php");
      } else if (data == 'guest') {
        window.location.href = "index.php";
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
