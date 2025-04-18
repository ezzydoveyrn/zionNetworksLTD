<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#073b2f">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZION GENERALS LIMITED</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="../index.php">
                    <img src="../assets/logo/white-white.png" alt="">
                </a>
            </div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="products">
            <!-- Product 1 -->
            <div class="product" data-id="1">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8aGVhZHBob25lc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Wireless Headphones">
                <h3>Wireless Headphones</h3>
                <p class="price">ksh 2599.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 2 -->
            <div class="product" data-id="2">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c21hcnQlMjB3YXRjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Smart Watch">
                <h3>Smart Watch</h3>
                <p class="price">ksh 3999</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 3 -->
            <div class="product" data-id="3">
                <img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Ymx1ZXRvb3RoJTIwc3BlYWtlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Bluetooth Speaker">
                <h3>Bluetooth Speaker</h3>
                <p class="price">ksh 4000.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 4 -->
            <div class="product" data-id="4">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c21hcnQlMjBwaG9uZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Smartphone">
                <h3>Premium Smartphone</h3>
                <p class="price">ksh 79985.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 5 -->
            <div class="product" data-id="5">
                <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8a2V5Ym9hcmR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=80" alt="Mechanical Keyboard">
                <h3>Mechanical Keyboard</h3>
                <p class="price">ksh 6500</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 6 -->
            <div class="product" data-id="6">
                <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG1vdXNlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=80" alt="Gaming Mouse">
                <h3>Gaming Mouse</h3>
                <p class="price">ksh 490.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </section>
    </main>

    <div class="cart-overlay">
        <div class="cart">
            <span class="close-cart"><i class="fas fa-times"></i></span>
            <h2>Your Cart</h2>
            <div class="cart-content">
                <!-- Cart items will be added here -->
            </div>
            <div class="cart-footer">
                <h3>Total: <span class="total-price">0.00</span></h3>
                <button class="clear-cart">Clear Cart</button>
                <button class="checkout-btn">Checkout</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>