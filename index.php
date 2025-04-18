<?php
  session_start();
  require_once("includes/header.php")
?>
  <div class="overlay" id="overlay"></div>
  <main>
    <div class="landingPage" id="landingPage" data-aos="flip-right" data-aos-delay="100" data-aos-offset="100">
      <div class="right">
        <div class="container">
          <div class="cont-1">
            <span class="randomTop-text">
              Feels good to upgrade
            </span>
          </div>
          <div class="cont-2 slide1">
            <p>Feels Good to Upgrade</p>
            <p>Enjoy up to 2X speed on</p>
            <p>Home Fibre</p>
            <div class="inner-container">
            </div>
            <p>Visit <b>Zion Generals Limited</b> to get connected | T&Cs Apply</p>
            <div class="logo">
              <img src="assets/logo/white-white.png" alt="">
            </div>
          </div>
          <div class="cont-2 slide2 displayNone">
            <p>Feels Good to Upgrade</p>
            <p>Enjoy up to 2X speed on</p>
            <p>Home Fibre</p>
            <div class="innerPic">
              <img src="assets/images/winner.jpg" alt="">
            </div>
            <p>Visit <b>Zion Generals Limited</b> to get connected | T&Cs Apply</p>
            <div class="logo">
              <img src="assets/logo/white-white.png" alt="">
            </div>
          </div>
          <div class="cont-3">
            <div class="s1">
              <button class="slideBtnLeft">
                <img src="assets/svgs/chevron_left_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="">
              </button>
            </div>
            <div class="s2">
              <div class="randomAct slide1Active activeSlide"></div>
              <div class="randomAct slide2Active"></div>
            </div>
            <div class="s3">
              <button class="slideBtnRight">
                <img src="assets/svgs/chevron_right_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="">
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="left">
        <div class="top-container">
          <div class="text">
            <h1>Zion Networks, The Future Now</h1>
            <p>Experience the fastest internet speeds and seamless connectivity with Zion Networks.</p>
          </div>
          <div class="button-container">
            <a href="#" class="btn btn-active">Buy Now &nbsp; &RightAngleBracket;</a>
            <a href="#" class="btn btn-second">Explore Packages &nbsp; &RightAngleBracket;</a>
            <a href="#" class="btn btn-last">Learn More &nbsp; &RightAngleBracket;</a>
          </div>
        </div>
        <div class="bottom-container">
          <p>Explore Home Fibre</p>
          <div class="button-container">
            <a href="#" class="btn btn-active">Get Connected</a>
            <a href="#" class="btn btn-last">Fibre Packages</a>
          </div>
        </div>
      </div>
    </div>
    <div class="fibreContainer" id="fibreContainer"data-aos="fade-up" data-aos-delay="100" data-aos-offset="200">
      <div class="container" data-aos="fade-right" data-aos-delay="100" data-aos-offset="200">
        <div class="top-container">
          Check Fibre Coverage
        </div>
        <div class="bottom-container">
          <div class="left-container">
            <div class="container">
              <div class="img">
                <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 395.71 395.71" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738 c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388 C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191 c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z"></path> </g> </g></svg>
              </div>
              <div class="text">
                <div class="head">
                  <h3>Check your Coverage</h3>
                  <hr>
                  <p>Find out if your area is Fibre Ready</p>
                </div>
              </div>
            </div>
          </div>
          <div class="right-container">
            <h4>Get Connected to Zion Fibre</h4>
            <p>Find out if your area is fibre ready</p>
           <form>
            <div class="input-container">
              <label for="selectarea">Select your town/area</label>
              <select name="selectarea" id="selectarea">
                <option value="town1">Town 1</option>
                <option value="town2">Town 2</option>
                <option value="town3">Town 3</option>
                <option value="town4">Town 4</option>
              </select>
            </div>
            <div class="input-container">
              <label for="enterestate">Enter Estate/Building name</label>
              <input type="text" name="enterestate" id="enterestate" required>
            </div>
            <div class="input-container">
              <label for="enterlandmark">Enter Closest Landmark</label>
              <input type="text" name="enterlandmark" id="enterlandmark" placeholder="Enter your closest landmark" required>
            </div>
            <div class="input-container">
              <label for="generalarea">Enter your general area</label>
              <input type="text" name="generalarea" id="generalarea" placeholder="Town/street" required>
            </div>
            <div class="submit-input">
             <input type="submit" value="Get Connected" class="submit-input-btn">
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
    <section class="package-section" id="explorePackages" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <h1>Fibre Packages</h1>
      <div class="package-buttons">
        <button class="tab-btn active" data-category="home">Explore Home</button>
        <button class="tab-btn" data-category="family">Explore Family Share</button>
        <button class="tab-btn" data-category="business">Explore Business</button>
      </div>

      <div id="package-container" class="package-container">
        <!-- JS will inject cards here -->
      </div>
    </section>
    <div class="addOn-container" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <div class="container" id="addOns" data-aos="fade-up" data-aos-delay="50" data-aos-offset="200">
        <h1>Home Fibre Add-ons</h1>
        <div class="addons">
          <!-- Smart TV Box -->
          <div class="addon-card">
            <div class="icon">
              <img src="https://img.icons8.com/ios-filled/100/000000/cast.png" alt="Smart TV Box" />
            </div>
            <h2>SMART TV BOX</h2>
            <p>Enjoyment ni ku-transform your TV into a Smart TV. Get a Smart Android Box and upgrade to Casting.</p>
            <button onclick="showInfo('Smart TV Box')">Find out more →</button>
          </div>
    
          <!-- Home CCTV -->
          <div class="addon-card">
            <div class="icon">
              <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/camera--v1.png" alt="camera--v1"/>

            </div>
            <h2>HOME CCTV</h2>
            <p>Safety is paramount, so is peace of mind. Maintain safety in your home and manage basic home utilities at all times.</p>
            <button onclick="showInfo('Home CCTV')">Find out more →</button>
          </div>
    
          <!-- Home Insurance -->
          <div class="addon-card">
            <div class="icon">
              <img src="https://img.icons8.com/ios-filled/100/000000/shield.png" alt="Home Insurance" />
            </div>
            <h2>HOME INSURANCE</h2>
            <p>Welcome to the good life, where everything you own is protected and your peace of mind remains intact.</p>
            <button onclick="showInfo('Home Insurance')">Find out more →</button>
          </div>
        </div>
      </div>
    </div>
    <div class="wireless" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <div class="wireless-wrapper">
        <h2 class="title">Our Wireless Solutions</h2>
        <div class="wireless-cards">
          <!-- 4G Card -->
          <div class="card">
            <div class="icon-circle">
              📶
            </div>
            <h3>4G Wireless Connectivity</h3>
            <p>Enjoy seamless and fast WIFI internet at home. Get yours today at Safaricom shops Countrywide.</p>
            <div class="buttons">
              <button>Buy Now</button>
              <button>Request a callback ➜</button>
              <button>Read FAQs</button>
            </div>
          </div>
    
          <!-- 5G Card -->
          <div class="card">
            <div class="icon-circle">
              📶
            </div>
            <h3>5G Wireless Connectivity</h3>
            <p>Enjoy seamless and fast WIFI internet at home. Check if you're 5G ready</p>
            <div class="buttons">
              <button>Buy Now</button>
              <button>Request a callback ➜</button>
              <button>Read FAQs</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="business-section" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <p class="subtitle">Internet For Business</p>
      <h2 class="main-title">Why <strong>Internet for Business</strong></h2>
      
      <div class="features-wrapper">
        <!-- Feature 1 -->
        <div class="feature">
          <div class="icon-circle green">
            📡
          </div>
          <h3>Best Network</h3>
          <p>
            Try without risk – we offer 30-day rolling contracts at the same price you'd pay for a year's commitment if you bought direct so you're not tied into a long contract.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="feature">
          <div class="icon-circle">
            🎧
          </div>
          <h3>24/7 Support</h3>
          <p>
            Add onboarding and training for your team to get help setting up Office 365. We’ll walk you through the essential features and provide ongoing support.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="feature">
          <div class="icon-circle">
            🏷️
          </div>
          <h3>Offers & Deals</h3>
          <p>
            We can also help you to migrate your mailboxes so you can retain all your contacts and keep conversations going without skipping a beat.
          </p>
        </div>

        <!-- Feature 4 -->
        <div class="feature">
          <div class="icon-circle">
            💻
          </div>
          <h3>IT Services</h3>
          <p>
            You'll have all your licences in one place. We'll manage your subscription – making life easier for you.
          </p>
        </div>
      </div>
    </section>
    <div class="internet-options" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <div class="internet-card">
        <img src="assets/images/fibre.png" alt="Fibre Internet">
        <div class="card-content">
          <h2>Get Connected to our Fibre Internet</h2>
          <p>Connect your business to fast internet with Fibre for business</p>
          <a href="#">Find Out More →</a>
        </div>
      </div>

      <div class="internet-card">
        <img src="assets/images/ladymg.png" alt="5G Internet">
        <div class="card-content">
          <h2>Get 5G Internet for Business</h2>
          <p>Enjoy seamless experience with our reliable super fast <strong>5G</strong> internet speeds for your business.</p>
          <a href="#">Find Out More →</a>
        </div>
      </div>
    </div>
    <div class="router-section" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <h2>Routers And More</h2>
      <div class="router-card">
        <div class="router-left">
          <img src="assets/images/winner.jpg" alt="Safaricom 4G Router Ad">
        </div>
        <div class="router-right">
          <h3>Never Miss a Moment With The <br>4G Wi-Fi Router</h3>
          <p>
            Enjoy seamless and fast Wi-Fi internet at home.<br>
            Get yours today at Zion Generals Shop and dealers Countrywide on
            <a href="#">Zion Networks</a>
          </p>
          <a href="#" class="router-link">Find Out More →</a>
        </div>
      </div>
    </div>
    <div class="product-section" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <div class="product-card">
        <div class="product-text">
          <h3>Transform your TV into <br>a Smart TV</h3>
          <a href="#" class="product-link">Find Out More →</a>
        </div>
        <div class="product-image">
          <img src="assets/images/GigaBox.svg" alt="Smart TV Box">
        </div>
      </div>

      <div class="product-card">
        <div class="product-text">
          <h3>Maintain safety in your <br>home with CCTV</h3>
          <a href="#" class="product-link">Find Out More →</a>
        </div>
        <div class="product-image">
          <img src="assets/images/OutdoorCamera.png" alt="CCTV Camera">
        </div>
      </div>
    </div>
    <section class="insurance-section" data-aos="fade-up" data-aos-delay="100" data-aos-offset="100">
      <h2 class="section-title">Home Insurance</h2>
      <div class="insurance-content">
        <div class="insurance-image">
          <img src="assets/images/HomeInsurance.png" alt="Man hugging TV" />
        </div>
        <div class="insurance-text">
          <h3>Welcome to the good life,<br>everything you own is protected</h3>
          <p>Welcome to the good life, where everything you own is protected and your peace of mind remains intact.</p>
          <a href="#" class="insurance-link">Find Out More →</a>
        </div>
      </div>
    </section>

  </main>
  <div id="chat-container">
    <div id="chat-box"></div>
    <input type="text" id="user-input" placeholder="Type your message..." />
  </div>

  <footer class="footer" data-aos="fade-up" data-aos-delay="200" data-aos-offset="100">
    <div class="footer-container">
      <!-- Zion Networks -->
      <div class="footer-col">
        <h3><span class="logo-highlight">Zion</span> Networks</h3>
        <ul>
          <li>About Us</li>
          <li>Our Services</li>
          <li>Pricing Plans</li>
          <li>Careers</li>
        </ul>
        <img src="assets/images/paybill.jpg" alt="Paybill Number" class="paybill-img" />
      </div>

      <!-- Support -->
      <div class="footer-col">
        <h3>Support</h3>
        <ul>
          <li>Contact Us</li>
          <li>FAQs</li>
          <li><a style="text-decoration: none; color: greenyellow;" href="http://wa.me/+254756881148" target="_blank"><i class="fab fa-whatsapp"></i> CHAT ON WHATSAPP</a></li>
        </ul>
      </div>

      <!-- Get In Touch -->
      <div class="footer-col">
        <h3>Get In Touch</h3>
        <ul>
          <li><a style="text-decoration: none; color: white;" href="tel:+254722291143"><i class="fas fa-phone"></i> +254-722-291-143</a></li>
          <li><a style="text-decoration: none; color: white;" href="mailto:intertechzion@gmail.com"><i class="fas fa-envelope" style="color: gold;"></i> intertechzion@gmail.com</a></li>
          <li><i class="fas fa-map-marker-alt"></i> Zion Generals Ltd, Off Kioi Road next to Malkia Wings Hospital</li>
          <li><i class="fas fa-location-arrow" style="color: gold;"></i> Get Direction</li>
        </ul>
      </div>

      <!-- Information -->
      <div class="footer-col">
        <h3>Information</h3>
        <ul>
          <li>Blog</li>
          <li>Privacy Policy</li>
          <li>Terms and Conditions</li>
          <li>Cookie Policy</li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; Zion Networks. All Rights Reserved.</p>
      <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-instagram"></i>
      </div>
    </div>
  </footer>
  <button id="scrollTop"><i class="fas fa-arrow-up"></i></button>
  <button id="installBtn" style="display: none;">Install App</button>








  <script>
    const scrollToTopBtn = document.getElementById('scrollTop');

    window.addEventListener("scroll", () => {
      if (window.scrollY > 400) {
        scrollToTopBtn.style.display = "block";
      } else {
        scrollToTopBtn.style.display = "none";
      }
    });

    scrollToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });

  </script>
  <script src="sw.js"></script>
  <script src="javascript/header.js"></script>
  <script src="javascript/slideshow.main.js"></script>
  <script src="script.js"></script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // animation duration in ms
      once: true,    // animate only once while scrolling down
    });
  </script>

</body>
</html>