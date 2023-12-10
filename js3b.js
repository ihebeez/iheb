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
const hideBtn2 = document.getElementById('btn2');
const showBtn2 = document.getElementById('see-more2');
const element2 = document.getElementById('see-d2');
const element2a = document.getElementById('facility');
if(j==1){
    element2.classList.add('hidden');   
}
hideBtn2.addEventListener('click', function() {
  console.log('Hide button clicked');
  element2.classList.add('hidden');
  element2a.classList.remove('transparance');
});

showBtn2.addEventListener('click', function() {
    j--;
  console.log('Show button clicked');
  element2.classList.remove('hidden');
  element2a.classList.add('transparance');
});
i=1;
const hideBtn = document.getElementById('btn1');
const showBtn = document.getElementById('see-more1');
const element = document.getElementById('see-d1');
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

k=1;
const hideBtn4 = document.getElementById('btn4');
const showBtn4 = document.getElementById('see-more4');
const element4 = document.getElementById('see-d4');
const element4a = document.getElementById('facility');
if(k==1){
    element4.classList.add('hidden');   
}
hideBtn4.addEventListener('click', function() {
  console.log('Hide button clicked');
  element4.classList.add('hidden');
  element4a.classList.remove('transparance');
});

showBtn4.addEventListener('click', function() {
    k--;
  console.log('Show button clicked');
  element4.classList.remove('hidden');
  element4a.classList.add('transparance');
});
k=1;
const hideBtn3 = document.getElementById('btn3');
const showBtn3 = document.getElementById('see-more3');
const element3 = document.getElementById('see-d3');
const element3a = document.getElementById('facility');
if(k==1){
    element3.classList.add('hidden');   
}
hideBtn3.addEventListener('click', function() {
  console.log('Hide button clicked');
  element3.classList.add('hidden');
  element3a.classList.remove('transparance');
});

showBtn3.addEventListener('click', function() {
    k--;
  console.log('Show button clicked');
  element3.classList.remove('hidden');
  element3a.classList.add('transparance');
});
d1=1;
const hideBtn5 = document.getElementById('btn5');
const showBtn5 = document.getElementById('see-more5');
const element5 = document.getElementById('see-d5');
const element5a = document.getElementById('facility');
if(d1==1){
    element5.classList.add('hidden');   
  }
hideBtn5.addEventListener('click', function() {
  console.log('Hide button clicked');
  element5.classList.add('hidden');
  element5a.classList.remove('transparance');
});

showBtn5.addEventListener('click', function() {
    d1--;
  console.log('Show button clicked');
  element5.classList.remove('hidden');
  element5a.classList.add('transparance');
});
c1=1;
const hideBtna = document.getElementById('btna');
const showBtna = document.getElementById('see-morea');
const elementa = document.getElementById('see-da');
const elementaa = document.getElementById('facility');
if(c1==1){
    elementa.classList.add('hidden');   
}
hideBtna.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementa.classList.add('hidden');
  elementaa.classList.remove('transparance');
});

showBtna.addEventListener('click', function() {
    c1--;
  console.log('Show button clicked');
  elementa.classList.remove('hidden');
  elementaa.classList.add('transparance');
});
h=1;
const hideBtn22 = document.getElementById('btnb');
const showBtn22 = document.getElementById('see-moreb');
const element22 = document.getElementById('see-db');
const element22a = document.getElementById('facility');
if(h==1){
    element22.classList.add('hidden');   
}
hideBtn22.addEventListener('click', function() {
  console.log('Hide button clicked');
  element22.classList.add('hidden');
  element22a.classList.remove('transparance');
});

showBtn22.addEventListener('click', function() {
    h--;
  console.log('Show button clicked');
  element22.classList.remove('hidden');
  element22a.classList.add('transparance');
});

c2=1;
const hideBtnb = document.getElementById('btnb');
const showBtnb = document.getElementById('see-moreb');
const elementb = document.getElementById('see-db');
const elementbb = document.getElementById('facility');
if(c2==1){
    elementb.classList.add('hidden');   
}
hideBtnb.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementb.classList.add('hidden');
  elementbb.classList.remove('transparance');
});

showBtnb.addEventListener('click', function() {
  c2--;
  console.log('Show button clicked');
  elementb.classList.remove('hidden');
  elementbb.classList.add('transparance');
});
c3=1;
const hideBtnc = document.getElementById('btnc');
const showBtnc = document.getElementById('see-morec');
const elementc = document.getElementById('see-dc');
const elementcc = document.getElementById('facility');
if(c3==1){
    elementc.classList.add('hidden');   
}
hideBtnc.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementc.classList.add('hidden');
  elementcc.classList.remove('transparance');
});

showBtnc.addEventListener('click', function() {
  c3--;
  console.log('Show button clicked');
  elementc.classList.remove('hidden');
  elementcc.classList.add('transparance');
});
c4=1;
const hideBtnd = document.getElementById('btnd');
const showBtnd = document.getElementById('see-mored');
const elementd = document.getElementById('see-dd');
const elementdd = document.getElementById('facility');
if(c4==1){
    elementd.classList.add('hidden');   
}
hideBtnd.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementd.classList.add('hidden');
  elementdd.classList.remove('transparance');
});

showBtnd.addEventListener('click', function() {
  c4--;
  console.log('Show button clicked');
  elementd.classList.remove('hidden');
  elementdd.classList.add('transparance');
});
c5=1;
const hideBtne = document.getElementById('btne');
const showBtne = document.getElementById('see-moree');
const elemente = document.getElementById('see-de');
const elementee = document.getElementById('facility');
if(c5==1){
    elemente.classList.add('hidden');   
}
hideBtne.addEventListener('click', function() {
  console.log('Hide button clicked');
  elemente.classList.add('hidden');
  elementee.classList.remove('transparance');
});

showBtne.addEventListener('click', function() {
  c5--;
  console.log('Show button clicked');
  elemente.classList.remove('hidden');
  elementee.classList.add('transparance');
});

c6=1;
const hideBtnf = document.getElementById('btnf');
const showBtnf = document.getElementById('see-moref');
const elementf = document.getElementById('see-df');
const elementff = document.getElementById('facility');
if(c6==1){
    elementf.classList.add('hidden');   
}
hideBtnf.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementf.classList.add('hidden');
  elementff.classList.remove('transparance');
});

showBtnf.addEventListener('click', function() {
  c6--;
  console.log('Show button clicked');
  elementf.classList.remove('hidden');
  elementff.classList.add('transparance');
});
c7=1;
const hideBtng = document.getElementById('btng');
const showBtng = document.getElementById('see-moreg');
const elementg = document.getElementById('see-dg');
const elementgg = document.getElementById('facility');
if(c7==1){
    elementg.classList.add('hidden');   
}
hideBtng.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementg.classList.add('hidden');
  elementgg.classList.remove('transparance');
});

showBtng.addEventListener('click', function() {
  c7--;
  console.log('Show button clicked');
  elementg.classList.remove('hidden');
  elementgg.classList.add('transparance');
});
c8=1;
const hideBtnh = document.getElementById('btnh');
const showBtnh = document.getElementById('see-moreh');
const elementh = document.getElementById('see-dh');
const elementhh = document.getElementById('facility');
if(c8==1){
    elementh.classList.add('hidden');   
}
hideBtnh.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementh.classList.add('hidden');
  elementhh.classList.remove('transparance');
});

showBtnh.addEventListener('click', function() {
  c8--;
  console.log('Show button clicked');
  elementh.classList.remove('hidden');
  elementhh.classList.add('transparance');
});
c9=1;
const hideBtni = document.getElementById('btni');
const showBtni = document.getElementById('see-morei');
const elementi = document.getElementById('see-di');
const elementii = document.getElementById('facility');
if(c9==1){
    elementi.classList.add('hidden');   
}
hideBtni.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementi.classList.add('hidden');
  elementii.classList.remove('transparance');
});

showBtni.addEventListener('click', function() {
  c9--;
  console.log('Show button clicked');
  elementi.classList.remove('hidden');
  elementii.classList.add('transparance');
});
d1=1;
const hideBtnj = document.getElementById('btnj');
const showBtnj = document.getElementById('see-morej');
const elementj = document.getElementById('see-dj');
const elementjj = document.getElementById('facility');
if(d1==1){
    elementj.classList.add('hidden');   
}
hideBtnj.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementj.classList.add('hidden');
  elementjj.classList.remove('transparance');
});

showBtnj.addEventListener('click', function() {
  d1--;
  console.log('Show button clicked');
  elementj.classList.remove('hidden');
  elementjj.classList.add('transparance');
});
d2=1;
const hideBtno = document.getElementById('btno');
const showBtno = document.getElementById('see-moreo');
const elemento = document.getElementById('see-do');
const elementoo = document.getElementById('facility');
if(d2==1){
    elemento.classList.add('hidden');   
}
hideBtno.addEventListener('click', function() {
  console.log('Hide button clicked');
  elemento.classList.add('hidden');
  elementoo.classList.remove('transparance');
});

showBtno.addEventListener('click', function() {
  d2--;
  console.log('Show button clicked');
  elemento.classList.remove('hidden');
  elementoo.classList.add('transparance');
});
d3=1;
const hideBtnp = document.getElementById('btnp');
const showBtnp = document.getElementById('see-morep');
const elementp = document.getElementById('see-dp');
const elementpp = document.getElementById('facility');
if(d3==1){
    elementp.classList.add('hidden');   
}
hideBtnp.addEventListener('click', function() {
  console.log('Hide button clicked');
  elementp.classList.add('hidden');
  elementpp.classList.remove('transparance');
});

showBtnp.addEventListener('click', function() {
  d3--;
  console.log('Show button clicked');
  elementp.classList.remove('hidden');
  elementpp.classList.add('transparance');
});
f=1;
const hide = document.getElementById('exit-btn');
const show = document.getElementById('disconnect');
const show1 = document.getElementById('img-profil');
const show2 = document.getElementById('name-client');
const elem = document.getElementById('option');
if(f==1){
    elem.classList.add('hidden');  
    hide.classList.add('hidden'); 
}
hide.addEventListener('click', function() {
  console.log('Hide button clicked');
  elem.classList.add('hidden');
  
  hide.classList.add('hidden'); 
  show1.classList.remove('hidden');
  show2.classList.remove('hidden');
 
});

show.addEventListener('click', function() {
    f--;
  console.log('Show button clicked');
  elem.classList.remove('hidden');
  
  hide.classList.remove('hidden'); 
  show1.classList.add('hidden');
  show2.classList.add('hidden');

});