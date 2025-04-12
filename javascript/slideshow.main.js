const slideshowProds = [
  {
    packageName: "BRONZE",
    speed: "3 Mbps",
    currency: "KES",
    price: "1,000",
  },
  {
    packageName: "SILVER",
    speed: "5 Mbps",
    currency: "KES",
    price: "1,500",
  },
  {
    packageName: "GOLD",
    speed: "7 Mbps",
    currency: "KES",
    price: "2,000",
  },
  {
    packageName: "DIAMOND",
    speed: "10 Mbps",
    currency: "KES",
    price: "2,500",
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



