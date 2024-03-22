

let input = document.querySelector('.psw');

let showBtn = document.querySelector('.mee');

showBtn.onclick = function() {
    if (input.type === "password") {
        input.type = "text"; 
        showBtn.classList.add('active');
    } else {
        input.type = "password";
        showBtn.classList.remove('active');
    }
};



