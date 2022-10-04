window.addEventListener('load', () => AOS.init());

const logoutBtn = document.querySelector('#logout');


logoutBtn.addEventListener('click', () => {
  let request = new XMLHttpRequest();
  request.open('POST', 'php/logout.php', true);
  
  request.addEventListener('readystatechange', () => {
    if (request.readyState === 4 && request.status === 200) {
      let data = request.response;
      if (data == "success") {
        window.location.href = "index.php";
      } else {
        alert(data);
      }
      
    } else if (request.readyState === 4) {
      alert('Error');
    }
  })
  
  request.send();
})
