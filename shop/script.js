// DOM Elements
const cartIcon = document.querySelector(".cart-icon");
const cartOverlay = document.querySelector(".cart-overlay");
const closeCart = document.querySelector(".close-cart");
const cartContent = document.querySelector(".cart-content");
const cartTotal = document.querySelector(".cart-total");
const cartCount = document.querySelector(".cart-count");
const clearCartBtn = document.querySelector(".clear-cart");
const checkoutBtn = document.querySelector(".checkout-btn");
const addToCartBtns = document.querySelectorAll(".add-to-cart");

// Cart array
let cart = JSON.parse(localStorage.getItem("cart")) || [];

// Initialize the app
function init() {
  // Add event listeners
  addToCartBtns.forEach((btn) => {
    btn.addEventListener("click", addToCart);
  });

  cartIcon.addEventListener("click", () => {
    cartOverlay.classList.add("active");
    document.body.style.overflow = "hidden";
  });

  closeCart.addEventListener("click", () => {
    cartOverlay.classList.remove("active");
    document.body.style.overflow = "auto";
  });

  clearCartBtn.addEventListener("click", clearCart);
  checkoutBtn.addEventListener("click", checkout);

  // Render cart on page load
  renderCart();
}

// Add to cart
function addToCart(e) {
  const product = e.target.closest(".product");
  const productId = product.getAttribute("data-id");
  const productName = product.querySelector("h3").textContent;
  const productPrice = parseFloat(
    product.querySelector(".price").textContent.replace("$", "")
  );
  const productImg = product.querySelector("img").src;

  // Check if product already in cart
  const existingItem = cart.find((item) => item.id === productId);

  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cart.push({
      id: productId,
      name: productName,
      price: productPrice,
      img: productImg,
      quantity: 1,
    });
  }

  // Update cart in localStorage
  localStorage.setItem("cart", JSON.stringify(cart));

  // Update UI
  renderCart();
  showCart();

  // Add animation to cart icon
  cartIcon.classList.add("animate");
  setTimeout(() => {
    cartIcon.classList.remove("animate");
  }, 300);
}

// Render cart
function renderCart() {
  cartContent.innerHTML = "";

  if (cart.length === 0) {
    cartContent.innerHTML =
      '<p class="empty-cart-message">Your cart is empty</p>';
    cartCount.textContent = "0";
    cartTotal.textContent = "0.00";
    return;
  }

  cart.forEach((item) => {
    const cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");
    cartItem.innerHTML = `
            <img src="${item.img}" alt="${item.name}">
            <div class="cart-item-info">
                <h4>${item.name}</h4>
                <p>$${item.price.toFixed(2)}</p>
                <div class="quantity-controls">
                    <button class="decrease" data-id="${item.id}">-</button>
                    <span class="quantity">${item.quantity}</span>
                    <button class="increase" data-id="${item.id}">+</button>
                </div>
            </div>
            <div class="cart-item-remove" data-id="${item.id}">
                <i class="fas fa-trash"></i>
            </div>
        `;
    cartContent.appendChild(cartItem);
  });

  // Add event listeners to new buttons
  document.querySelectorAll(".decrease").forEach((btn) => {
    btn.addEventListener("click", () => {
      updateQuantity(btn.getAttribute("data-id"), -1);
    });
  });

  document.querySelectorAll(".increase").forEach((btn) => {
    btn.addEventListener("click", () => {
      updateQuantity(btn.getAttribute("data-id"), 1);
    });
  });

  document.querySelectorAll(".cart-item-remove").forEach((btn) => {
    btn.addEventListener("click", () => {
      removeFromCart(btn.getAttribute("data-id"));
    });
  });

  // Update totals
  updateTotals();
}

// Update quantity
function updateQuantity(id, change) {
  const item = cart.find((item) => item.id === id);
  if (!item) return;

  item.quantity += change;

  if (item.quantity < 1) {
    removeFromCart(id);
  } else {
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
  }
}

// Remove from cart
function removeFromCart(id) {
  cart = cart.filter((item) => item.id !== id);
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
}

// Clear cart
function clearCart() {
  cart = [];
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
}

// Checkout
function checkout() {
  if (cart.length === 0) {
    alert("Your cart is empty!");
    return;
  }

  // Simulate checkout
  const total = calculateTotal();
  alert(`Thank you for your purchase!\nTotal: $${total.toFixed(2)}`);

  // Clear cart after checkout
  clearCart();
  cartOverlay.classList.remove("active");
  document.body.style.overflow = "auto";
}

// Calculate total
function calculateTotal() {
  return cart.reduce((total, item) => {
    return total + item.price * item.quantity;
  }, 0);
}

// Update totals
function updateTotals() {
  const total = calculateTotal();
  const count = cart.reduce((sum, item) => sum + item.quantity, 0);

  cartTotal.textContent = total.toFixed(2);
  cartCount.textContent = count;
}

// Show cart
function showCart() {
  cartOverlay.classList.add("active");
  document.body.style.overflow = "hidden";
}

// Initialize the app
document.addEventListener("DOMContentLoaded", init);
