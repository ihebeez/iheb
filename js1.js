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
const showBtn = document.getElementById('login-btn');
const element = document.getElementById('options');
const element1 = document.getElementById('facility');
const appointment = document.getElementById('appointment');
if(i==1){
    element.classList.add('hidden');  
    hideBtn.classList.add('hidden'); 
}
hideBtn.addEventListener('click', function() {
  console.log('Hide button clicked');
  element.classList.add('hidden');
  showBtn.classList.remove('hidden');
  hideBtn.classList.add('hidden'); 
  element1.classList.remove('transparance');
});

showBtn.addEventListener('click', function() {
    i--;
  console.log('Show button clicked');
  element.classList.remove('hidden');
  showBtn.classList.add('hidden');
  hideBtn.classList.remove('hidden'); 
  element1.classList.add('transparance');
});
j=1;
const hideBtna = document.getElementById('exit-btn');
const showBtna = document.getElementById('login-btn');
const elementa = document.getElementById('options');

if(j==1){
    elementa.classList.add('hidden');  
    hideBtna.classList.add('hidden'); 
}
hideBtna.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementa.classList.add('hidden');
  showBtna.classList.remove('hidden');
  hideBtna.classList.add('hidden'); 
 
});

showBtna.addEventListener('click', function() {
    j--;
  console.log('Show button clicked');
  elementa.classList.remove('hidden');
  showBtna.classList.add('hidden');
  hideBtna.classList.remove('hidden'); 

});



