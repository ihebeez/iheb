let menu = document.querySelector('#menu-btn');
let navbar=document.querySelector('#navbar');
menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
menu.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

j=1;
const hideBtna = document.getElementById('exit-btn');
const showBtna = document.getElementById('disconnect');
const showBtna1 = document.getElementById('img-profil');
const showBtna2 = document.getElementById('name-client');
const elementa = document.getElementById('option');

if(j==1){
    elementa.classList.add('hidden');  
    hideBtna.classList.add('hidden'); 
}
hideBtna.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementa.classList.add('hidden');
  
  hideBtna.classList.add('hidden'); 
  showBtna1.classList.remove('hidden');
  showBtna2.classList.remove('hidden');
 
});

showBtna.addEventListener('click', function() {
    j--;
  console.log('Show button clicked');
  elementa.classList.remove('hidden');
  
  hideBtna.classList.remove('hidden'); 
  showBtna1.classList.add('hidden');
  showBtna2.classList.add('hidden');

});





