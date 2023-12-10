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
i=1;
const hideBtn = document.getElementById('exit-btn');
const showBtn= document.getElementById('disconnect');
const showBtn1 = document.getElementById('img-profil');
const showBtn2 = document.getElementById('name-client');

const element = document.getElementById('option');

const appointment = document.getElementById('appointment');
if(i==1){
    element.classList.add('hidden');  
    hideBtn.classList.add('hidden'); 
}
hideBtn.addEventListener('click', function() {
  console.log('Hide button clicked');
  element.classList.add('hidden');
  showBtn1.classList.remove('hidden');
  showBtn2.classList.remove('hidden');
  hideBtn.classList.add('hidden'); 
  
});

showBtn.addEventListener('click', function() {
  i--;
  console.log('Show button clicked');
  element.classList.remove('hidden');
  showBtn1.classList.add('hidden');
  showBtn2.classList.add('hidden');
  hideBtn.classList.remove('hidden'); 
 
});
