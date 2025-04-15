// DOM elements
const cartCount = document.querySelector(".cart-count");
const cartContent = document.querySelector(".cart-content");
const addCartBtns = document.querySelectorAll(".add-to-cart");
const cartIcon = document.querySelector(".cart-icon");
const cartOverlay = document.querySelector(".cart-overlay");
const cartClose = document.querySelector(".close-cart");
const totalPriceEl = document.querySelector(".total-price");
const clearCartBtn = document.querySelector(".clear-cart");

let cart = JSON.parse(localStorage.getItem("cart")) || [];

// Initialize cart on load
document.addEventListener("DOMContentLoaded", () => {
  cart.forEach(renderCartItem);
  updateCartCount();
  updateTotalPrice();
});

// Add to cart
addCartBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    const product = e.target.closest(".product");
    const prodImg = product.querySelector("img").src;
    const prodName = product.querySelector("h3").innerText;
    const prodPrice = parseFloat(
      product.querySelector(".price").innerText.replace("ksh ", "")
    );
    const prodId = product.dataset.id;

    const existingItem = cart.find((item) => item.id === prodId);

    if (existingItem) {
      existingItem.quantity++;
      updateItemQuantityInDOM(prodId, existingItem.quantity);
    } else {
      const newItem = {
        id: prodId,
        name: prodName,
        price: prodPrice,
        image: prodImg,
        quantity: 1,
      };
      cart.push(newItem);
      renderCartItem(newItem);
    }

    updateCartCount();
    updateTotalPrice();
    saveCart();
  });
});

// Render item
function renderCartItem(item) {
  const cartItem = document.createElement("div");
  cartItem.classList.add("cart-item");
  cartItem.dataset.id = item.id;

  cartItem.innerHTML = `
    <img src="${item.image}" alt="${item.name}">
    <div class="cart-item-info">
        <h4>${item.name}</h4>
        <p>ksh ${item.price.toFixed(2)}</p>
        <div class="quantity-controls">
            <button class="decrease" data-id="${item.id}">-</button>
            <span class="quantity" data-id="${item.id}">${item.quantity}</span>
            <button class="increase" data-id="${item.id}">+</button>
        </div>
    </div>
    <div class="cart-item-remove" data-id="${item.id}">
        <i class="fas fa-trash"></i>
    </div>
  `;

  cartContent.appendChild(cartItem);
}

// Quantity update
function updateItemQuantityInDOM(id, quantity) {
  const quantitySpan = cartContent.querySelector(`.quantity[data-id="${id}"]`);
  if (quantitySpan) quantitySpan.innerText = quantity;
}

// Cart count
function updateCartCount() {
  const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
  cartCount.innerText = totalItems;
}

// Total price
function updateTotalPrice() {
  const total = cart.reduce((sum, item) => sum + item.quantity * item.price, 0);
  totalPriceEl.innerText = `ksh ${total.toFixed(2)}`;
}

// Save cart to localStorage
function saveCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

// Remove item
function removeCartItem(id) {
  cart = cart.filter((item) => item.id !== id);
  const itemEl = cartContent.querySelector(`.cart-item[data-id="${id}"]`);
  if (itemEl) itemEl.remove();
  updateCartCount();
  updateTotalPrice();
  saveCart();
}

// Cart interactivity
cartContent.addEventListener("click", (e) => {
  const id = e.target.dataset.id;

  if (e.target.classList.contains("increase")) {
    const item = cart.find((item) => item.id === id);
    if (item) {
      item.quantity++;
      updateItemQuantityInDOM(id, item.quantity);
    }
  }

  if (e.target.classList.contains("decrease")) {
    const item = cart.find((item) => item.id === id);
    if (item && item.quantity > 1) {
      item.quantity--;
      updateItemQuantityInDOM(id, item.quantity);
    } else {
      removeCartItem(id);
    }
  }

  if (
    e.target.classList.contains("cart-item-remove") ||
    e.target.closest(".cart-item-remove")
  ) {
    removeCartItem(id);
  }

  updateCartCount();
  updateTotalPrice();
  saveCart();
});

// Clear cart button
clearCartBtn.addEventListener("click", () => {
  cart = [];
  cartContent.innerHTML = "";
  updateCartCount();
  updateTotalPrice();
  saveCart();
});

// Cart toggle
cartIcon.addEventListener("click", () => {
  cartOverlay.classList.toggle("active");
});
cartClose.addEventListener("click", () => {
  cartOverlay.classList.toggle("active");
});
