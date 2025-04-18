const data = {
  home: [
    {
      name: "BRONZE",
      speed: "10",
      color: "#b87333",
      features: [
        "Fast web Browse",
        "SD Movie & music streaming",
        "Internet surfing, social media & email",
      ],
      price: "ksh2,000",
      validity: "1 month",
    },
    {
      name: "SILVER",
      speed: "20",
      color: "#777",
      features: [
        "Fast web Browse & Video calls",
        "HD TV shows and movies up to 3 connected devices",
        "Internet surfing, social media & email",
      ],
      price: "ksh3,000",
      validity: "1 month",
    },
    {
      name: "GOLD",
      speed: "30",
      color: "#e1c646",
      features: [
        "Fast web Browse",
        "4K Movies & TV Shows",
        "Online gaming and downloading",
      ],
      price: "ksh4,000",
      validity: "1 month",
    },
    {
      name: "DIAMOND",
      speed: "50",
      color: "#c04f64",
      features: [
        "Fast web Browse",
        "4K Movie & TV Shows",
        "Heavy online gaming and downloading",
      ],
      price: "ksh5,000",
      validity: "1 month",
    },
    {
      name: "KAYOLE",
      speed: "5",
      color: "#b38aff",
      features: [
        "High-definition Movie and TV shows streaming 4K/8K",
        "Heavy online gaming and downloading",
        "Home Automation",
      ],
      price: "ksh1,500",
      validity: "1 month",
    },
  ],
  family: [
    {
      name: "GOLD",
      speed: "80",
      color: "#e1c646",
      features: [
        "Fast web Browse",
        "4K Movies & TV Shows",
        "Online gaming and downloading",
      ],
    },
    {
      name: "DIAMOND",
      speed: "500",
      color: "#c04f64",
      features: [
        "Fast web Browse",
        "4K Movie & TV Shows",
        "Heavy online gaming and downloading",
      ],
    },
  ],
  business: [
    {
      name: "PLATINUM",
      speed: "1000",
      color: "#b38aff",
      features: [
        "High-definition Movie and TV shows streaming 4K/8K",
        "Heavy online gaming and downloading",
        "Home Automation",
      ],
    },
  ],
};

const container = document.getElementById("package-container");
const buttons = document.querySelectorAll(".tab-btn");

// Load initial (home) packages
renderPackages("home");

buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    // Remove active from all buttons
    buttons.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const category = btn.getAttribute("data-category");
    renderPackages(category);
  });
});

function renderPackages(category) {
  const packages = data[category];
  container.innerHTML = "";

  packages.forEach((pkg) => {
    const card = document.createElement("div");
    card.className = "card";

    card.innerHTML = `
      <h2 style="background: ${pkg.color}">${pkg.name}</h2>
      <h3>${pkg.speed} <span>Mbps</span></h3>
      <ul>
        ${pkg.features.map((feature) => `<li>${feature}</li>`).join("")}
      </ul>
      <div class="price">${pkg.price}</div>
        <div class="validity">Valid for ${pkg.validity}</div>
        
        <a href="#" class="button">Get Connected</a>
    `;

    container.appendChild(card);
  });
}


function showInfo(addonName) {
  alert(`More information about: ${addonName}`);
}
