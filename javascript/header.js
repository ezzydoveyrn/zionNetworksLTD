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