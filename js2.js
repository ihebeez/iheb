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
const hideBtn = document.getElementById('hidden-btn');
const showBtn = document.getElementById('img1');
const element = document.getElementById('slider1');
const element1 = document.getElementById('facility');
if(i==1){
    element.classList.add('hidden');   
}
hideBtn.addEventListener('click', function() {
  console.log('Hide button clicked');
  element.classList.add('hidden');
  element1.classList.remove('transparance');
});

showBtn.addEventListener('click', function() {
    i--;
  console.log('Show button clicked');
  element.classList.remove('hidden');
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

a=1;
const hideBtn2 = document.getElementById('hidden-btn2');
const showBtn2 = document.getElementById('img2');
const element2 = document.getElementById('slider2');
const element2a = document.getElementById('facility');
if(a==1){
    element2.classList.add('hidden');   
}
hideBtn2.addEventListener('click', function() {
  console.log('Hide button clicked');
  element2.classList.add('hidden');
  element2a.classList.remove('transparance');
});

showBtn2.addEventListener('click', function() {
    a--;
  console.log('Show button clicked');
  element2.classList.remove('hidden');
  element2a.classList.add('transparance');
});

b=1;
const hideBtn3 = document.getElementById('hidden-btn3');
const showBtn3 = document.getElementById('img3');
const element3 = document.getElementById('slider3');
const element3b = document.getElementById('facility');
if(b==1){
    element3.classList.add('hidden');   
}
hideBtn3.addEventListener('click', function() {
  console.log('Hide button clicked');
  element3.classList.add('hidden');
  element3b.classList.remove('transparance');
});

showBtn3.addEventListener('click', function() {
    b--;
  console.log('Show button clicked');
  element3.classList.remove('hidden');
  element3b.classList.add('transparance');
});

c=1;
const hideBtn4 = document.getElementById('hidden-btn4');
const showBtn4 = document.getElementById('img4');
const element4 = document.getElementById('slider4');
const element4c = document.getElementById('facility');
if(c==1){
    element4.classList.add('hidden');   
}
hideBtn4.addEventListener('click', function() {
  console.log('Hide button clicked');
  element4.classList.add('hidden');
  element4c.classList.remove('transparance');
});

showBtn4.addEventListener('click', function() {
    c--;
  console.log('Show button clicked');
  element4.classList.remove('hidden');
  element4c.classList.add('transparance');
});

d=1;
const hideBtn5 = document.getElementById('hidden-btn5');
const showBtn5 = document.getElementById('img5');
const element5 = document.getElementById('slider5');
const element5d = document.getElementById('facility');
if(d==1){
    element5.classList.add('hidden');   
}
hideBtn5.addEventListener('click', function() {
  console.log('Hide button clicked');
  element5.classList.add('hidden');
  element5d.classList.remove('transparance');
});

showBtn5.addEventListener('click', function() {
    d--;
  console.log('Show button clicked');
  element5.classList.remove('hidden');
  element5d.classList.add('transparance');
});

e=1;
const hideBtn6 = document.getElementById('hidden-btn6');
const showBtn6 = document.getElementById('img6');
const element6 = document.getElementById('slider6');
const element6e = document.getElementById('facility');
if(e==1){
    element6.classList.add('hidden');   
}
hideBtn6.addEventListener('click', function() {
  console.log('Hide button clicked');
  element6.classList.add('hidden');
  element6e.classList.remove('transparance');
});

showBtn6.addEventListener('click', function() {
    e--;
  console.log('Show button clicked');
  element6.classList.remove('hidden');
  element6e.classList.add('transparance');
});
f=1;
const hideBtn7 = document.getElementById('hidden-btn7');
const showBtn7 = document.getElementById('img7');
const element7 = document.getElementById('slider7');
const element7f = document.getElementById('facility');
if(f==1){
    element7.classList.add('hidden');   
}
hideBtn7.addEventListener('click', function() {
  console.log('Hide button clicked');
  element7.classList.add('hidden');
  element7f.classList.remove('transparance');
});

showBtn7.addEventListener('click', function() {
    f--;
  console.log('Show button clicked');
  element7.classList.remove('hidden');
  element7f.classList.add('transparance');
});
g=1;
const hideBtn8 = document.getElementById('hidden-btn8');
const showBtn8 = document.getElementById('img8');
const element8 = document.getElementById('slider8');
const  element8g= document.getElementById('facility');
if(g==1){
    element8.classList.add('hidden');   
}
hideBtn8.addEventListener('click', function() {
  console.log('Hide button clicked');
  element8.classList.add('hidden');
  element8g.classList.remove('transparance');
});

showBtn8.addEventListener('click', function() {
    g--;
  console.log('Show button clicked');
  element8.classList.remove('hidden');
  element8g.classList.add('transparance');
});
h=1;
const hideBtn9 = document.getElementById('hidden-btn9');
const showBtn9 = document.getElementById('img9');
const element9 = document.getElementById('slider9');
const element9a = document.getElementById('facility');
if(h==1){
    element9.classList.add('hidden');   
}
hideBtn9.addEventListener('click', function() {
  console.log('Hide button clicked');
  element9.classList.add('hidden');
  element9a.classList.remove('transparance');
});

showBtn9.addEventListener('click', function() {
    h--;
  console.log('Show button clicked');
  element9.classList.remove('hidden');
  element9a.classList.add('transparance');
});



