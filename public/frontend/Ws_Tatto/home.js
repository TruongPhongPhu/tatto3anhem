// Scrol theo trang web
window.addEventListener('scroll', function () {
  var navBar = document.querySelector('.nav-bar');
  if (window.pageYOffset > 0) {
    navBar.classList.add('scrolled');
  } else {
    navBar.classList.remove('scrolled');
  }
});


// question
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "header") {
    x.className += " responsive";
  } else {
    x.className = "header";
  }
}

const hambuger = document.querySelector(".hambuger");
const navMenu = document.querySelector(".nav-menu");
const btnGroup = document.querySelector(".btn-group")

hambuger.addEventListener("click", () => {
  hambuger.classList.toggle("active");
  navMenu.classList.toggle("active");
  btnGroup.classList.toggle("active")
})

// document.querySelector(".nav-link").forEach(n => n.addEventListener("click", () => {
//   hambuger.classList.remove("active");
//   navMenu.classList.remove("active");
// }))


// JavaScript
const imageToZoom = document.querySelectorAll('.image-to-zoom');
const zoomOverlay = document.querySelector('.zoom-overlay');
const zoomedImage = document.querySelector('.zoomed-image');
const closeButton = document.querySelector('.close-button');

imageToZoom.forEach(image => {
  image.addEventListener('click', () => {
    zoomOverlay.style.display = 'block';
    zoomedImage.src = image.src;
    
  });
});

closeButton.addEventListener('click', () => {
  zoomOverlay.style.display = 'none';
});

zoomOverlay.addEventListener('click', (event) => {
  if (event.target === zoomOverlay) {
    zoomOverlay.style.display = 'none';
  }
});