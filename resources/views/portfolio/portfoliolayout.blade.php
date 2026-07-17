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
.navbar-dark .fa-user { color: white !important;
 }

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

/* Scrollable list area inside cart dropdown (separate from individual items) */
.cart-items {
  height: 400px;
  max-height: 60vh;
  overflow-y: auto;
  scrollbar-width: thin; /* Firefox */
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
  width: 50px; height: 50px; object-fit: cover; border-radius: 5px;
}
.cart-footer {
  display: flex; justify-content: space-between; padding: 10px;
}

/* Profile dropdown */
.profile-dropdown { max-width: 350px; width: 450px; }
.profile-header { text-align: center; padding: 15px; }
.profile-header img {
  width: 70px; height: 70px; border-radius: 50%; object-fit: cover;
}

/* Mobile full-width dropdowns */
@media (max-width: 991.98px) {
  .dropdown-menu.cart-dropdown,
  .dropdown-menu.profile-dropdown {
    position: fixed !important;
    top: 0 !important; left: 0 !important; right: 0 !important;
    width: 100vw !important; margin: 0 !important; border-radius: 0 !important;
    transform: none !important; height: 72vh; overflow-y: auto;
  }
  .dropdown-menu .btn-close { position: absolute; right: 15px; top: 15px; }
  .center-icons { margin: 0 auto; }
}

/* Desktop hover submenu (open to the right) */
@media (min-width: 992px) {
  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;   /* open to the right of parent */
    margin-top: -1px;
  }

  .dropdown-submenu:hover > .dropdown-menu {
    display: block;
  }
}

/* Mobile submenu (open below) */
@media (max-width: 991px) {
  .dropdown-submenu > .dropdown-menu {
    position: static !important;
    width: 100%;
    margin-top: 0.5rem;
  }
}

</style>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Bootstrap 5.3.3 CSS (kept consistent) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- jQuery (if you need it elsewhere) -->
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
        <!-- FIX: unique ID for mobile -->
        <span id="cart-count-mobile" class="cart-badge" style="display:none"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-end cart-dropdown p-0" data-bs-auto-close="outside" id="shoppingCartMobile">
        <div class="p-2 border-bottom d-flex justify-content-between align-items-center">
          <strong>Shopping Cart</strong>
          <button type="button" class="btn-close" aria-label="Close" id="closeMobile"></button>
        </div>
        <!-- FIX: dedicated mobile container -->
        <div class="cart-items" id="cartItemsMobile"><!-- items injected here --></div>
        <div class="cart-footer">
          <a href="{{ asset('/checkout') }}" class="btn  btn-sm bg-success text-light">Check Out</a>
          <span class="fw-bold" id="totalPriceMobile">Total: PKR 0.00</span>
        </div>
      </div>
    </div>

    <!-- Profile (mobile) -->
    @if(isset($user))
      <div class="nav-item dropdown">
        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <img
            src="{{ !empty($user->picture) && file_exists(public_path('uploads/profiles/'.$user->picture)) 
                      ? asset('uploads/profiles/'.$user->picture) 
                      : asset('images/profile/defaultprofile.png') }}"
            class="rounded-circle border border-secondary"
            style="width: 35px; height: 35px; object-fit: cover;"
            alt="Profile" loading="lazy">
        </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
          <div class="profile-header">
            <img
              src="{{ !empty($user->picture) && file_exists(public_path('uploads/profiles/'.$user->picture)) 
                        ? asset('uploads/profiles/'.$user->picture) 
                        : asset('images/profile/defaultprofile.png') }}"
              class="rounded-circle border border-secondary"
              style="width: 70px; height: 70px; object-fit: cover;"
              alt="Profile" loading="lazy">
            <h6 class="mt-2 mb-0">{{ $user->name }}</h6>
            <small>{{ $user->email }}</small>
          </div>
          <hr>
          <a class="dropdown-item" href="/userprofile">My Profile</a>
          <a class="dropdown-item" href="{{ route('displayOrder') }}">Order History</a>
          <a class="dropdown-item" href="{{ route('measurements.index') }}">Measurement History</a>
          <a class="dropdown-item" href="{{ route('usercontacthistory') }}">Contact History</a>
          <a class="dropdown-item" href="{{ route('showall.orders') }}">Invoice History</a>
                 <li class="dropdown-submenu dropstart">
                <a class="dropdown-item dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
                <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                    <li><a class="dropdown-item" href="{{ route('usermanageprofile.show') }}">Manage Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('measurements.show') }}">Manage Measurement</a></li>
                </ul>
            </li>

          <hr>
          <a class="dropdown-item text-danger" href="{{ URL::to('logout') }}">Logout</a>
        </div>
      </div>
    @else
      <div class="nav-item dropdown">
        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('images/profile/defaultprofile.png') }}" class="rounded-circle"
               style="width:35px;height:35px;object-fit:cover" alt="Profile" loading="lazy" />
        </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
          <div class="profile-header">
            <img src="{{ asset('images/profile/defaultprofile.png') }}" class="rounded-circle border border-secondary"
                 style="width: 70px; height: 70px; object-fit: cover;" alt="Profile" loading="lazy" />
            <h6 class="mt-2 mb-0">Please Login or Register</h6>
          </div>
          <hr>
          <a class="dropdown-item" href="{{--route('login')--}}">Login</a>
          <a class="dropdown-item" href="{{--route('signUp')--}}">Register</a>
        </div>
      </div>
    @endif
  </div><!-- /center-icons (mobile) -->

  <!-- Right: Hamburger -->
  <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <!-- FIX: unique ID for desktop -->
          <span id="cart-count-desktop" class="cart-badge" style="display:none"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end cart-dropdown p-0" data-bs-auto-close="outside" id="shoppingCartDesktop">
          <div class="p-2 border-bottom d-flex justify-content-between align-items-center">
            <strong>Shopping Cart</strong>
            <button type="button" class="btn-close" aria-label="Close" id="closeDesktop"></button>
          </div>
          <!-- FIX: dedicated desktop container -->
          <div class="cart-items" id="cartItemsDesktop"><!-- items injected here --></div>
          <div class="cart-footer">
            <a href="{{ asset('/checkout') }}" class="btn  btn-sm bg-success text-light">Check Out</a>
            <span class="fw-bold" id="totalPriceDesktop">Total: PKR 0.00</span>
          </div>
        </div>
      </div>

      <!-- Profile (desktop) -->
      @if(isset($user))
        <div class="nav-item dropdown">
          <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img
              src="{{ !empty($user->picture) && file_exists(public_path('uploads/profiles/'.$user->picture)) 
                        ? asset('uploads/profiles/'.$user->picture) 
                        : asset('images/profile/defaultprofile.png') }}"
              class="rounded-circle border border-secondary"
              style="width: 35px; height: 35px; object-fit: cover;"
              alt="Profile" loading="lazy">
          </a>
          <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
            <div class="profile-header">
              <img
                src="{{ !empty($user->picture) && file_exists(public_path('uploads/profiles/'.$user->picture)) 
                          ? asset('uploads/profiles/'.$user->picture) 
                          : asset('images/profile/defaultprofile.png') }}"
                class="rounded-circle border border-secondary"
                style="width: 70px; height: 70px; object-fit: cover;"
                alt="Profile" loading="lazy">
              <h6 class="mt-2 mb-0">{{ $user->name }}</h6>
              <small>{{ $user->email }}</small>
            </div>
            <hr>
            <a class="dropdown-item" href="/puserprofile">My Profile</a>
           
         
            <a class="dropdown-item" href="{{ route('pcontact') }}">Contact History</a>
          
   {{-- Settings Submenu --}}
            <li class="dropdown-submenu dropstart">
                <a class="dropdown-item dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
                <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                    <li><a class="dropdown-item" href="{{ route('pusermanageprofile.show') }}">Manage Profile</a></li>

                </ul>
            </li>
            <hr>
            <a class="dropdown-item text-danger" href="{{ URL::to('pusersignIn') }}">Logout</a>
          </div>
        </div>
      @else
        <div class="nav-item dropdown">
          <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('images/profile/defaultprofile.png') }}" class="rounded-circle border border-secondary"
                 style="width: 35px; height: 35px; object-fit: cover;" alt="Profile" loading="lazy" />
          </a>
          <div class="dropdown-menu dropdown-menu-end profile-dropdown" data-bs-auto-close="outside">
            <div class="profile-header">
              <img src="{{ asset('images/profile/defaultprofile.png') }}" class="rounded-circle border border-secondary"
                   style="width: 70px; height: 70px; object-fit: cover;" alt="Profile" loading="lazy" />
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

    // Prevent dropdown from closing when clicking outside (applies to both)
    document.addEventListener('click', function (event) {
        const isClickInsideDesktop = dropdownDesktop.contains(event.target);
        const isClickInsideMobile = dropdownMobile.contains(event.target);
        const isCartButton = event.target.closest('[aria-labelledby="shoppingCart"]');

        if (!isClickInsideDesktop && !isClickInsideMobile && !isCartButton) {
            event.stopPropagation();
        }
    });

    // Close Desktop Cart
    closeDesktop.addEventListener('click', function () {
        dropdownDesktop.classList.remove('show');
    });

    // Close Mobile Cart
    closeMobile.addEventListener('click', function () {
        dropdownMobile.classList.remove('show');
    });

    // Keep dropdown open when clicking inside
    dropdownDesktop.addEventListener('click', function (event) {
        event.stopPropagation();
    });
    dropdownMobile.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});
</script>



<script>
  // Function to load and display cart items
  document.addEventListener('DOMContentLoaded', function () {
      updateCartDisplay(); // Load and display the cart items when the page is loaded
  });

  // Update the quantity of cart item
  function updateCartItem(index, change) {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const item = cart[index];
      
      // Update quantity, ensure it doesn't go below 1
      item.quantity = Math.max(0, item.quantity + change);

      if (item.quantity === 0) {
          // If the quantity is 0, remove the product from the cart
          cart.splice(index, 1); // Remove the item from the cart
      }

      localStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart to localStorage
      updateCartDisplay(); // Update the cart display dynamically
  }

  // Remove item from cart
  function removeCartItem(index) {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      cart.splice(index, 1); // Remove item at the specified index
      localStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart to localStorage
      updateCartDisplay(); // Update the cart display dynamically
  }

  // Update the cart display without reloading the page
  function updateCartDisplay() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const cartItemsContainer = document.getElementById('cartItemsDesktop');
      const cartItemsMobile = document.getElementById('cartItemsMobile');
      cartItemsContainer.innerHTML = '';  // Clear previous cart display
      cartItemsMobile.innerHTML = '';     // Clear previous cart display (important)
      
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
          // Calculate subtotal (price * quantity) for this item
          const itemTotalPrice = item.price * item.quantity; 
          totalPriceDesktop += itemTotalPrice;
          totalPriceMobile += itemTotalPrice;

          // Create cart item HTML dynamically
          const cartItemHTML = `
            <div class="col-12 mt-2 cart-item" data-price="${item.price}">
              <div class="d-flex align-items-center justify-content-between flex-wrap" style="gap: 0.5rem;">
                
                <!-- Product Image -->
                <div style="flex: 0 0 50px; max-width: 50px;">
                  <img src="${item.image}" alt="${item.name}" class="img-fluid rounded">
                </div>

                <!-- Product Name -->
                <div style="flex: 1 1 120px;" class="text-truncate">
                  ${item.name}
                </div>

                <!-- Price -->
                <div style="flex: 0 0 90px;" class="text-nowrap">
                  PKR ${itemTotalPrice.toFixed(2)}
                </div>

                <!-- Quantity Controls -->
                <div class="d-flex align-items-center" style="flex: 0 0 auto;">
                  <span class="decrease-btn px-2 border border-danger rounded bg-danger text-white" onclick="updateCartItem(${index}, -1)"> &lt; </span>
                  <span class="quantity px-2">${item.quantity}</span>
                  <span class="increase-btn px-2 border border-danger rounded bg-danger text-white" onclick="updateCartItem(${index}, 1)"> &gt; </span>
                </div>

                <!-- Remove Button -->
                <div style="flex: 0 0 auto;">
                  <button class="btn btn-danger btn-sm" onclick="removeCartItem(${index})">x</button>
                </div>
                
              </div>
            </div>
          `;

          cartItemsContainer.innerHTML += cartItemHTML;
          cartItemsMobile.innerHTML += cartItemHTML;
      });

      // Update total price dynamically
      document.getElementById('totalPriceDesktop').textContent = `PKR ${totalPriceDesktop.toFixed(2)}`;
      document.getElementById('totalPriceMobile').textContent = `PKR ${totalPriceMobile.toFixed(2)}`;
  }
</script>


<!-- For mobile count  -->
<script>
$(document).ready(function () {

    // Always hide the cart count on page load
    $('#cart-count-mobile').hide();

    // Show cart count ONLY when Add To Cart is clicked
    $('.btn-primary').on('click', function () {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (cart.length > 0) {
            $('#cart-count-mobile').text(cart.length).show();
            sessionStorage.setItem('cartVisible', 'yes'); // flag set for session
        }
    });

    // Hide cart count when it's clicked
    $('#cart-count-mobile').on('click', function () {
        $(this).hide();
        sessionStorage.removeItem('cartVisible');
    });
});
</script>
<!-- For Desktop count  -->
<script>
$(document).ready(function () {

    // Always hide the cart count on page load
    $('#cart-count-desktop').hide();

    // Show cart count ONLY when Add To Cart is clicked
    $('.btn-primary').on('click', function () {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (cart.length > 0) {
            $('#cart-count-desktop').text(cart.length).show();
            sessionStorage.setItem('cartVisible', 'yes'); // flag set for session
        }
    });

    // Hide cart count when it's clicked
    $('#cart-count-desktop').on('click', function () {
        $(this).hide();
        sessionStorage.removeItem('cartVisible');
    });
});
</script>

<!-- for setting dropdown -->
<script>
  // Ensure the main dropdown stays open when clicking on "Settings"
document.querySelectorAll('.dropdown-submenu').forEach(function(submenu) {
  submenu.addEventListener('click', function(event) {
    event.stopPropagation(); // Prevent closing of main dropdown
  });
});

</script>


  
<script src="http://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('script')

</body>
</html>
