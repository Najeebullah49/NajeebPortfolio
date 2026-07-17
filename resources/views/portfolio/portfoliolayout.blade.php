<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>@yield('title','Najeeb Ullah Portfolio')</title>
 <style>
 /* Colors for dark navbar */
 .navbar-dark .nav-link,
 .navbar-dark .navbar-brand,
 .navbar-dark .fa-shopping-cart,
 .navbar-dark .fa-user { color: white !important; }

 .navbar-brand { font-weight: bold; }

 /* Cart count badge */
 .cart-badge {
 position: absolute;
 top: 2px;
 right: -6px;
 background: red;
 color: white;
 font-size: 0.7rem;
 border-radius: 50%;
 padding: 2px 6px;
 font-weight: bold;
 }
 .nav-item.dropdown .nav-link { position: relative; }

 /* Cart dropdown sizing */
 .cart-dropdown { max-width: 350px; width: 450px; }

 /* Scrollable list area inside cart dropdown */
 .cart-items {
 height: 400px;
 max-height: 60vh;
 overflow-y: auto;
 scrollbar-width: thin;
 scrollbar-color: #007bff #f1f1f1;
 padding: 10px;
 }
 .cart-row {
 display: flex;
 align-items: center;
 gap: .5rem;
 padding: 8px 0;
 border-bottom: 1px solid #eee;
 }
 .cart-row img {
 width: 50px;
 height: 50px;
 object-fit: cover;
 border-radius: 5px;
 }
 .cart-footer {
 display: flex;
 justify-content: space-between;
 padding: 10px;
 }

 /* Profile dropdown */
 .profile-dropdown { max-width: 350px; width: 450px; }
 .profile-header { text-align: center; padding: 15px; }
 .profile-header img {
 width: 70px;
 height: 70px;
 border-radius: 50%;
 object-fit: cover;
 }

 /* Mobile full-width dropdowns */
 @media (max-width: 991.98px) {
 .dropdown-menu.cart-dropdown,
 .dropdown-menu.profile-dropdown {
 position: fixed !important;
 top: 0 !important;
 left: 0 !important;
 right: 0 !important;
 width: 100vw !important;
 margin: 0 !important;
 border-radius: 0 !important;
 transform: none !important;
 height: 72vh;
 overflow-y: auto;
 }
 .dropdown-menu .btn-close {
 position: absolute;
 right: 15px;
 top: 15px;
 }
 .center-icons { margin: 0 auto; }
 }

 /* Desktop hover submenu (open to the right) */
 @media (min-width: 992px) {
 .dropdown-submenu { position: relative; }
 .dropdown-submenu > .dropdown-menu {
 top: 0;
 left: 100%;
 margin-top: -1px;
 }
 .dropdown-submenu:hover > .dropdown-menu { display: block; }
 }

 /* Mobile submenu (open below) */
 @media (max-width: 991px) {
 .dropdown-submenu > .dropdown-menu {
 position: static !important;
 width: 100%;
 margin-top: 0.5rem;
 }
 }

 /* Show submenu when toggled by click (works on tap/mobile) */
 .dropdown-submenu > .dropdown-menu.show { display: block; }
 </style>

 <link rel="stylesheet" href="%7B%7B+asset%28%27css%2Fstyle.css%27%29+%7D%7D">
 <!-- Bootstrap 5.3.3 CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
 <!-- Left: Brand -->
 <a class="navbar-brand" href="/">NU PORTFOLIO</a>

 <!-- Center Icons (Mobile only) -->
 <div class="d-lg-none d-flex align-items-center center-icons">
 <!-- Cart (mobile) -->
 <div class="nav-item dropdown me-3">
 <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
 <i class="fas fa-shopping-cart"></i>
 <span id="cart-count-mobile" class="cart-badge" style="display:none"></span>
 </a>
 <div class="dropdown-menu dropdown-menu-end cart-dropdown p-0" data-bs-auto-close="outside" id="shoppingCartMobile">
 <div class="p-2 border-bottom d-flex justify-content-between align-items-center">
 <strong>Shopping Cart</strong>
 <button type="button" class="btn-close" aria-label="Close" id="closeMobile"></button>
 </div>
 <div class="cart-items" id="cartItemsMobile"><!-- items injected here --></div>
 <div class="cart-footer">
 <a href="%7B%7B+asset%28%27%2Fcheckout%27%29+%7D%7D" class="btn btn-sm bg-success text-light">Check Out</a>
 <span class="fw-bold" id="totalPriceMobile">Total: PKR 0.00</span>
 </div>
 </div>
 </div>

 <!-- Profile (mobile) -->
 @if(isset($user))
 <div class="nav-item dropdown">
 <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
 <img src="%7B%7B+%21empty%28%24user-%26gt%3Bpicture%29+%26amp%3B%26amp%3B+file_exists%28public_path%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29%29+%3F+asset%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29+%3A+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 35px; height: 35px; object-fit: cover;" alt="Profile" loading="lazy">
 </a>
 <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
 <div class="profile-header">
 <img src="%7B%7B+%21empty%28%24user-%26gt%3Bpicture%29+%26amp%3B%26amp%3B+file_exists%28public_path%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29%29+%3F+asset%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29+%3A+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 70px; height: 70px; object-fit: cover;" alt="Profile" loading="lazy">
 <h6 class="mt-2 mb-0">%7B%7B+%24user-%26gt%3Bname+%7D%7D</h6>
 <small>%7B%7B+%24user-%26gt%3Bemail+%7D%7D</small>
 </div>
 <hr>
 <a class="dropdown-item" href="/userprofile">My Profile</a>
 <a class="dropdown-item" href="%7B%7B+route%28%27displayOrder%27%29+%7D%7D">Order History</a>
 <a class="dropdown-item" href="%7B%7B+route%28%27measurements.index%27%29+%7D%7D">Measurement History</a>
 <a class="dropdown-item" href="%7B%7B+route%28%27usercontacthistory%27%29+%7D%7D">Contact History</a>
 <a class="dropdown-item" href="%7B%7B+route%28%27showall.orders%27%29+%7D%7D">Invoice History</a>

 <!-- Settings submenu -->
 <div class="dropdown-submenu">
 <a class="dropdown-item dropdown-toggle" href="#" role="button">
 <i class="fas fa-gear me-2"></i> Settings
 </a>
 <div class="dropdown-menu">
 <a class="dropdown-item" href="%7B%7B+route%28%27usermanageprofile.show%27%29+%7D%7D">Manage Profile</a>
 <a class="dropdown-item" href="%7B%7B+route%28%27measurements.show%27%29+%7D%7D">Manage Measurement</a>
 </div>
 </div>

 <hr>
 <a class="dropdown-item text-danger" href="%7B%7B+URL%3A%3Ato%28%27logout%27%29+%7D%7D">Logout</a>
 </div>
 </div>
 @else
 <div class="nav-item dropdown">
 <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
 <img src="%7B%7B+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle" style="width:35px;height:35px;object-fit:cover" alt="Profile" loading="lazy" />
 </a>
 <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
 <div class="profile-header">
 <img src="%7B%7B+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 70px; height: 70px; object-fit: cover;" alt="Profile" loading="lazy" />
 <h6 class="mt-2 mb-0">Please Login or Register</h6>
 </div>
 <hr>
 <a class="dropdown-item" href="%7B%7B--route%28%27login%27%29--%7D%7D">Login</a>
 <a class="dropdown-item" href="%7B%7B--route%28%27signUp%27%29--%7D%7D">Register</a>
 </div>
 </div>
 @endif
 </div><!-- /center-icons (mobile) -->

 <!-- Right: Hamburger -->
 <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>

 <!-- Collapsible Menu -->
 <div class="collapse navbar-collapse" id="navbarNav">
 <ul class="navbar-nav mx-lg-auto">
 <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
 <li class="nav-item"><a class="nav-link" href="/about">About Me</a></li>
 <li class="nav-item"><a class="nav-link" href="/skills">Skills</a></li>
 <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Courses</a>
 <ul class="dropdown-menu">
 <li><a class="dropdown-item" href="c-course">C Language</a></li>
 <li><a class="dropdown-item" href="c-plus-plus-course">C++</a></li>
 <li><a class="dropdown-item" href="java-course">Java</a></li>
 <li><a class="dropdown-item" href="html-course">HTML</a></li>
 <li><a class="dropdown-item" href="css-course">CSS</a></li>
 <li><a class="dropdown-item" href="bootsrap5-course">Bootsrap5</a></li>
 <li><a class="dropdown-item" href="laravel-course">Laravel</a></li>
 </ul>
 </li>
 <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
 <li class="nav-item"><a class="nav-link" href="/faqs">FAQs</a></li>
 </ul>

 <!-- Right icons (Desktop only) -->
 <div class="d-none d-lg-flex align-items-center ms-auto">
 <!-- Cart (desktop) -->
 <div class="nav-item dropdown me-3">
 <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
 <i class="fas fa-shopping-cart"></i>
 <span id="cart-count-desktop" class="cart-badge" style="display:none"></span>
 </a>
 <div class="dropdown-menu dropdown-menu-end cart-dropdown p-0" data-bs-auto-close="outside" id="shoppingCartDesktop">
 <div class="p-2 border-bottom d-flex justify-content-between align-items-center">
 <strong>Shopping Cart</strong>
 <button type="button" class="btn-close" aria-label="Close" id="closeDesktop"></button>
 </div>
 <div class="cart-items" id="cartItemsDesktop"><!-- items injected here --></div>
 <div class="cart-footer">
 <a href="%7B%7B+asset%28%27%2Fcheckout%27%29+%7D%7D" class="btn btn-sm bg-success text-light">Check Out</a>
 <span class="fw-bold" id="totalPriceDesktop">Total: PKR 0.00</span>
 </div>
 </div>
 </div>

 <!-- Profile (desktop) -->
 @if(isset($user))
 <div class="nav-item dropdown">
 <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
 <img src="%7B%7B+%21empty%28%24user-%26gt%3Bpicture%29+%26amp%3B%26amp%3B+file_exists%28public_path%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29%29+%3F+asset%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29+%3A+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 35px; height: 35px; object-fit: cover;" alt="Profile" loading="lazy">
 </a>
 <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
 <div class="profile-header">
 <img src="%7B%7B+%21empty%28%24user-%26gt%3Bpicture%29+%26amp%3B%26amp%3B+file_exists%28public_path%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29%29+%3F+asset%28%27uploads%2Fprofiles%2F%27.%24user-%26gt%3Bpicture%29+%3A+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 70px; height: 70px; object-fit: cover;" alt="Profile" loading="lazy">
 <h6 class="mt-2 mb-0">%7B%7B+%24user-%26gt%3Bname+%7D%7D</h6>
 <small>%7B%7B+%24user-%26gt%3Bemail+%7D%7D</small>
 </div>
 <hr>
 <a class="dropdown-item" href="/puserprofile">My Profile</a>
 <a class="dropdown-item" href="%7B%7B+route%28%27pcontact%27%29+%7D%7D">Contact History</a>

 <!-- Settings submenu -->
 <div class="dropdown-submenu">
 <a class="dropdown-item dropdown-toggle" href="#" role="button">
 <i class="fas fa-gear me-2"></i> Settings
 </a>
 <div class="dropdown-menu">
 <a class="dropdown-item" href="%7B%7B+route%28%27pusermanageprofile.show%27%29+%7D%7D">Manage Profile</a>
 </div>
 </div>

 <hr>
 <a class="dropdown-item text-danger" href="%7B%7B+URL%3A%3Ato%28%27pusersignIn%27%29+%7D%7D">Logout</a>
 </div>
 </div>
 @else
 <div class="nav-item dropdown">
 <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
 <img src="%7B%7B+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 35px; height: 35px; object-fit: cover;" alt="Profile" loading="lazy" />
 </a>
 <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
 <div class="profile-header">
 <img src="%7B%7B+asset%28%27images%2Fprofile%2Fdefaultprofile.png%27%29+%7D%7D" class="rounded-circle border border-secondary" style="width: 70px; height: 70px; object-fit: cover;" alt="Profile" loading="lazy" />
 <h6 class="mt-2 mb-0">Please Login or Register</h6>
 </div>
 <hr>
 <a class="dropdown-item" href="/pusersignIn">Login</a>
 <a class="dropdown-item" href="/pusersignUp">Register</a>
 </div>
 </div>
 @endif
 </div><!-- /right desktop -->
 </div><!-- /collapse -->
 </nav>

 @yield('content')

 <!-- Footer -->
 <footer class="bg-dark text-white text-center py-3 mt-5">
 <p class="mb-0">© 2026 Najeeb Ullah | All Rights Reserved</p>
 </footer>

 <script>
 document.addEventListener('DOMContentLoaded', function () {
 const dropdownDesktop = document.getElementById('shoppingCartDesktop');
 const closeDesktop = document.getElementById('closeDesktop');
 const dropdownMobile = document.getElementById('shoppingCartMobile');
 const closeMobile = document.getElementById('closeMobile');

 document.addEventListener('click', function (event) {
 const isClickInsideDesktop = dropdownDesktop.contains(event.target);
 const isClickInsideMobile = dropdownMobile.contains(event.target);
 const isCartButton = event.target.closest('[aria-labelledby="shoppingCart"]');
 if (!isClickInsideDesktop && !isClickInsideMobile && !isCartButton) {
 event.stopPropagation();
 }
 });

 closeDesktop.addEventListener('click', function () { dropdownDesktop.classList.remove('show'); });
 closeMobile.addEventListener('click', function () { dropdownMobile.classList.remove('show'); });

 dropdownDesktop.addEventListener('click', function (event) { event.stopPropagation(); });
 dropdownMobile.addEventListener('click', function (event) { event.stopPropagation(); });
 });
 </script>

 <script>
 document.addEventListener('DOMContentLoaded', function () {
 updateCartDisplay();
 });

 function updateCartItem(index, change) {
 const cart = JSON.parse(localStorage.getItem('cart')) || [];
 const item = cart[index];
 item.quantity = Math.max(0, item.quantity + change);
 if (item.quantity === 0) { cart.splice(index, 1); }
 localStorage.setItem('cart', JSON.stringify(cart));
 updateCartDisplay();
 }

 function removeCartItem(index) {
 const cart = JSON.parse(localStorage.getItem('cart')) || [];
 cart.splice(index, 1);
 localStorage.setItem('cart', JSON.stringify(cart));
 updateCartDisplay();
 }

 function updateCartDisplay() {
 const cart = JSON.parse(localStorage.getItem('cart')) || [];
 const cartItemsContainer = document.getElementById('cartItemsDesktop');
 const cartItemsMobile = document.getElementById('cartItemsMobile');
 cartItemsContainer.innerHTML = '';
 cartItemsMobile.innerHTML = '';

 let totalPriceDesktop = 0;
 let totalPriceMobile = 0;

 if (cart.length === 0) {
 cartItemsContainer.innerHTML = '<p class="text-center">Your cart is empty.</p>';
 cartItemsMobile.innerHTML = '<p class="text-center">Your cart is empty.</p>';
 document.getElementById('totalPriceDesktop').textContent = 'PKR 0.00';
 document.getElementById('totalPriceMobile').textContent = 'PKR 0.00';
 return;
 }

 cart.forEach((item, index) => {
 const itemTotalPrice = item.price * item.quantity;
 totalPriceDesktop += itemTotalPrice;
 totalPriceMobile += itemTotalPrice;

 const cartItemHTML = `
 <div class="col-12 mt-2 cart-item" data-price="${item.price}">
 <div class="d-flex align-items-center justify-content-between flex-wrap" style="gap: 0.5rem;">
 <div style="flex: 0 0 50px; max-width: 50px;">
 <img src="${item.image}" alt="${item.name}" class="img-fluid rounded">
 </div>
 <div style="flex: 1 1 120px;" class="text-truncate">${item.name}</div>
 <div style="flex: 0 0 90px;" class="text-nowrap">PKR ${itemTotalPrice.toFixed(2)}</div>
 <div class="d-flex align-items-center" style="flex: 0 0 auto;">
 <span class="decrease-btn px-2 border border-danger rounded bg-danger text-white" onclick="updateCartItem(${index}, -1)">&lt;</span>
 <span class="quantity px-2">${item.quantity}</span>
 <span class="increase-btn px-2 border border-danger rounded bg-danger text-white" onclick="updateCartItem(${index}, 1)">&gt;</span>
 </div>
 <div style="flex: 0 0 auto;">
 <button class="btn btn-danger btn-sm" onclick="removeCartItem(${index})">x</button>
 </div>
 </div>
 </div>
 `;
 cartItemsContainer.innerHTML += cartItemHTML;
 cartItemsMobile.innerHTML += cartItemHTML;
 });

 document.getElementById('totalPriceDesktop').textContent = `PKR ${totalPriceDesktop.toFixed(2)}`;
 document.getElementById('totalPriceMobile').textContent = `PKR ${totalPriceMobile.toFixed(2)}`;
 }
 </script>

 <!-- Mobile cart count -->
 <script>
 $(document).ready(function () {
 $('#cart-count-mobile').hide();
 $('.btn-primary').on('click', function () {
 const cart = JSON.parse(localStorage.getItem('cart')) || [];
 if (cart.length > 0) {
 $('#cart-count-mobile').text(cart.length).show();
 sessionStorage.setItem('cartVisible', 'yes');
 }
 });
 $('#cart-count-mobile').on('click', function () {
 $(this).hide();
 sessionStorage.removeItem('cartVisible');
 });
 });
 </script>

 <!-- Desktop cart count -->
 <script>
 $(document).ready(function () {
 $('#cart-count-desktop').hide();
 $('.btn-primary').on('click', function () {
 const cart = JSON.parse(localStorage.getItem('cart')) || [];
 if (cart.length > 0) {
 $('#cart-count-desktop').text(cart.length).show();
 sessionStorage.setItem('cartVisible', 'yes');
 }
 });
 $('#cart-count-desktop').on('click', function () {
 $(this).hide();
 sessionStorage.removeItem('cartVisible');
 });
 });
 </script>

 <!-- Settings submenu toggle (opens on click/tap; desktop also opens on hover via CSS) -->
 <script>
 document.querySelectorAll('.dropdown-submenu > .dropdown-toggle').forEach(function (toggle) {
 toggle.addEventListener('click', function (e) {
 e.preventDefault();
 e.stopPropagation();
 this.nextElementSibling.classList.toggle('show');
 });
 });
 </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 @stack('script')
</body>
</html>