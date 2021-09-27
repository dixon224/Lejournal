const glide1 = document.getElementById("glide1");
const glide2 = document.getElementById("glide2");
const glide3 = document.getElementById("glide3");

if (glide1)
  new Glide(glide1, {
    type: "carousel",
    startAt: 0,
    autoplay: 3000,
    hoverpause: true,
    perView: 1,
    animationDuration: 800,
    animationTimingFunc: "linear",
  }).mount();

if (glide2)
 new Glide(glide2, {
    type: "carousel",
    startAt: 0,
    autoplay: 3000,
    hoverpause: true,
    perView: 1,
    animationDuration: 800,
    animationTimingFunc: "linear",
  }).mount();

if (glide3)
 new Glide(glide3, {
    type: "carousel",
    startAt: 0,
    autoplay: 3000,
    hoverpause: true,
    perView: 1,
    animationDuration: 800,
    animationTimingFunc: "linear",
  }).mount();

// Fixed Nav
const gotoTop = document.querySelector(".goto-top");
const scrollLink = document.querySelector(".scroll-link");


const navBar = document.querySelector(".navigation");
const navHeight = navBar.getBoundingClientRect().height;
window.addEventListener("scroll", () => {
  const scrollHeight = window.pageYOffset;
  if (scrollHeight > navHeight) {
    navBar.style="position:fixed;width:100%;margin-top:-4rem;z-index:10000";
  } else {
    navBar.style="display:flex";
  }
if (scrollHeight > 300) {
    gotoTop.style="visibility: visible";
  }else{
    gotoTop.style="visibility: hidden";
  }
});


//ouverture
function ouvre() {
  ouvrebarreverticale=document.querySelector(".barre-verticale");
  ouvrebarreverticale.style.display="block";
}
fermebarreverticale=document.querySelector(".barre-verticale");
fermebarreverticale.style.display="none";
function ferme() {
   fermebarreverticale=document.querySelector(".barre-verticale");
fermebarreverticale.style.display="none";
}

fermebarreverticale=document.querySelector(".message-echec");
fermebarreverticale.style.display="none";
//pour l'inscription
function fermeinscription() {
   fermebarreverticale=document.querySelector(".message-echec");
   fermebarreverticale.style.display="none";
}


ferme=document.querySelector(".message-reussite");
ferme.style.display="none";
//pour la connection
function fermeconnectionreussite() {
   ferme=document.querySelector(".message-reussite");
   ferme.style.display="none";
}


close=document.querySelector(".message-echec");
close.style.display="none";
//pour la connection toujours
function fermeconnectionechec() {
   close=document.querySelector(".message-echec");
   close.style.display="none";
}




// // Scroll To
// const links = [...document.querySelectorAll(".scroll-link")];
// links.map(link => {
//   link.addEventListener("click", e => {
//     e.preventDefault();

//     const id = e.target.getAttribute("href").slice(1);
//     const element = document.getElementById(id);
//     const fixNav = navBar.classList.contains("fix-nav");
//     let position = element.offsetTop - navHeight;

//     if (!fixNav) {
//       position = position - navHeight;
//     }

//     window.scrollTo({
//       top: position,
//       left: 0,
//     });

//     navigation.classList.remove("show");
//     nav.classList.remove("show");
//     document.body.classList.remove("show");
//   });
// });