let sidenavBtn = document.querySelector('.sidenav-btn');
let sidenav = document.querySelector(".sidenav-container");
sidenavBtn.addEventListener('click', (e) => {
    sidenav.classList.toggle('displayNone');
});

const mainBody = document.querySelector("main");
mainBody.addEventListener("click", (e) => {
    if(sidenav.classList.contains("displayNone")){
        sidenav.classList.add("displayNone");
    }else if (sidenav.classList !== "displayNone"){
        sidenav.classList.toggle("displayNone");
    }
});



// slideshow
let slide1 = document.querySelector(".slide1");
let slide2 = document.querySelector(".slide2");

//active slides
let slide1Active = document.querySelector(".slide1Active");
let slide2Active = document.querySelector(".slide2Active");

//btns
let slideBtnLeft = document.querySelector(".slideBtnLeft");
let slideBtnRight = document.querySelector(".slideBtnRight");

setInterval(() => {
    slide1.classList.toggle("displayNone");
    slide2.classList.toggle("displayNone");

    if (!slide1.classList.contains("displayNone")) {
        document.querySelector(".randomTop-text").innerHTML =
          "Feels good to upgrade";
    }
    else {
        document.querySelector(".randomTop-text").innerHTML =
          "Take a moment to Rock out!";
    }

    slide1Active.classList.toggle("activeSlide");
    slide2Active.classList.toggle("activeSlide");
}, 4000);

slideBtnLeft.addEventListener("click", (e) => {
    slide1.classList.toggle("displayNone");
    slide2.classList.toggle("displayNone");

    slide1Active.classList.toggle("activeSlide");
    slide2Active.classList.toggle("activeSlide");
});
slideBtnRight.addEventListener("click", (e) => {
    slide1.classList.toggle("displayNone");
    slide2.classList.toggle("displayNone");

    slide1Active.classList.toggle("activeSlide");
    slide2Active.classList.toggle("activeSlide");
});




//app installation
if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("sw.js")
    .then(() => console.log("Service Worker Registered"))
    .catch((err) => console.error("SW registration failed:", err));
}

let deferredPrompt;

window.addEventListener("beforeinstallprompt", (e) => {
  // Prevent the default mini-infobar
  e.preventDefault();
  // Stash the event so it can be triggered later
  deferredPrompt = e;

  // Show your custom button
  const installBtn = document.querySelector("#installBtn");
  installBtn.style.display = "block";

  installBtn.addEventListener("click", () => {
    // Show the install prompt
    deferredPrompt.prompt();

    // Wait for the user to respond
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === "accepted") {
        console.log("User accepted A2HS prompt");
      } else {
        console.log("User dismissed A2HS prompt");
      }
      deferredPrompt = null;
    });
  });
});
