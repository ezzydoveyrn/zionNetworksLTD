let sidenavBtn = document.querySelector('.sidenav-btn');
let sidenav = document.querySelector(".sidenav-container");
sidenavBtn.addEventListener('click', (e) => {
    sidenav.classList.toggle('displayNone');
});