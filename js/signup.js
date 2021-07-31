const 
  form = document.querySelector(".signup form"),
  continueBtn = form.querySelector(".button input");


  form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
  }
  continueBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML object forx
    xhr.open('POST', "php/signup.php", true);
    xhr.onload = () => {

    }

    xhr.send();
  }

