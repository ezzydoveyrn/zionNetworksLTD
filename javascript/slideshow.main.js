const slideshowProds = [
  {
    packageName: "BRONZE",
    speed: "15 Mbps",
    currency: "KES",
    price: 2999,
  },
  {
    packageName: "SILVER",
    speed: "30 Mbps",
    currency: "KES",
    price: 4000,
  },
  {
    packageName: "GOLD",
    speed: "80 Mbps",
    currency: "KES",
    price: 6299,
  },
  {
    packageName: "DIAMOND",
    speed: "500 Mbps",
    currency: "KES",
    price: 12499,
  },
];
let slideshowDisp = document.querySelector(
  ".landingPage .right .container .cont-2 .inner-container"
);
slideshowProds.forEach((element) => {
  let htmlDoc = `
  <div class="prod-container">
    <div class="top">
      <p>${element.packageName}</p>
      <p>${element.speed}</p>
    </div>
    <div class="bottom">
      <p>${element.currency}</p>
      <p>${element.price}</p>
    </div>
  </div>
  `;
  slideshowDisp.innerHTML += htmlDoc;
  
});



