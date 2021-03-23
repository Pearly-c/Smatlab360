//hamburger control
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

//faq control
const accordion = document.getElementsByClassName("content-box");
for(z = 0; z < accordion.length; z++){
    accordion[z].addEventListener('click',function(){
        this.classList.toggle("active");
    })
}

const tabBtn = document.querySelectorAll('.nav ul li');
const tab = document.querySelectorAll('.tab');

function tabs(panelIndex){
    tab.forEach(function(node){
        node.style.display = 'none';
    });
    tab[panelIndex].style.display = 'block';
   
}
tabs(0);


