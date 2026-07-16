
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
        <!-- Navbar Brand -->
      <a class="navbar-brand ps-3" href="{{route('displayDashboard')}}">
  <span style="font-size: 18px; color: yellow;">Najeeb Medicine Company</span>
</a>


        <!-- Sidebar Toggle -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars" style="color:white;"></i></button>

        <!-- Navbar Search -->
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
            </div>
       

    

        <!-- User Dropdown -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-success" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(isset($admindata))

 <img
  src="{{ !empty($admindata->picture) && file_exists(public_path('uploads/profiles/'.$admindata->picture))
         ? asset('uploads/profiles/'.$admindata->picture)
         : asset('images/profile/defaultprofile.png') }}"
  class="rounded-circle img-fluid border border-primary bg-primary"
  style="width: 30px; height: 30px; object-fit: cover;"
  alt="Admin Profile"
  loading="lazy"
  onerror="this.onerror=null; this.src='{{ asset('images/profile/defaultprofile.png') }}';"
/>

                    @else
                        <i class="fas fa-user-circle" style="font-size: 30px;"></i>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if(isset($admindata))
                        <li>
                         <img
  src="{{ !empty($admindata->picture) && file_exists(public_path('uploads/profiles/'.$admindata->picture))
         ? asset('uploads/profiles/'.$admindata->picture)
         : asset('images/profile/defaultprofile.png') }}"
  class="rounded-circle ms-3 img-fluid border border-primary bg-primary"
  style="width: 30px; height: 30px; object-fit: cover;"
  alt="Admin Profile"
  loading="lazy"
  onerror="this.onerror=null; this.src='{{ asset('images/profile/defaultprofile.png') }}';"
/>
                            <small class="me-3">{{ $admindata->name }}</small>
                            <small class="text-center mx-3 my-1">{{ $admindata->email }}</small>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                    @endif
                    <li><a class="dropdown-item" href="/medicaladminprofile">Profile</a></li>
                    <li><a class="dropdown-item" href="/admin_register">Register</a></li>
                    <li><a class="dropdown-item" href="/adminlogout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Side Navigation -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading text-white">Core</div>
                        <a class="nav-link text-white active" href="/medicalDashboard">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                        <a class="nav-link text-white active" href="{{route('medical.profits')}}">
                             <i class="fas fa-coins me-2"></i> Profit
                        </a>


                  

                        <!-- Additional Menu Items -->
                        <a class="nav-link text-white active collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                            <i class="fas fa-box-open me-2"></i> Stock
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: white;"></i></div>
                        </a>
                        <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/uploadstock"><i class="fas fa-upload me-2"></i>Upload Stock</a>
                                <a class="nav-link" href="/current_stock"><i class="fas fa-list me-2"></i> Current Stock</a>
                               
                               <a class="nav-link" href="/sold">
  <i class="fas fa-cart-arrow-down me-2"></i> Sold Stock
</a>

                            </nav>
                        </div>
                        


                         <!-- Additional Menu Items -->
                        <a class="nav-link text-white active collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#invoices" aria-expanded="false" aria-controls="collapseProducts">
                          <i class="fas fa-file-invoice me-2"></i> Invoice

                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: white;"></i></div>
                        </a>
                        <div class="collapse" id="invoices" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/invoices/daily"><i class="fas fa-file-invoice-dollar me-2"></i>Daily Invoices</a>
                                <a class="nav-link" href="/invoices/weekly"><i class="fas fa-receipt me-2"></i> Weekly Invoices</a>      
                               <a class="nav-link" href="/invoices/monthly"><i class="fas fa-file-contract me-2"></i> Monthly Invoices</a>
                               <a class="nav-link" href="/invoices/yearly"> <i class="fas fa-file-lines me-2"></i> Yearly Invoices</a>

                            </nav>
                        </div>
                        <!-- Other links -->
                         
                        <a class="nav-link text-white active" href="/invoice">
                        
                          <i class="fas fa-shopping-bag me-2"></i> Sale Product

                        </a>
                         <a class="nav-link text-white active" href="/invoice_list">
                          
                            <i class="fas fa-calculator me-2"></i> Invoice List

                        </a>
                        <a class="nav-link text-white active" href="/medicalcustomers">
                            <i class="fas fa-users me-2"></i> User
                        </a>
                       
                        
                        <a class="nav-link text-white active" href="/admin_register">
                          <i class="fas fa-file-alt me-2"></i> Register Admin
                        </a>

                       


                        <a class="nav-link text-danger active" href="/adminlogout">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer text-white">
                    <div class="small text-white">Owner</div>
                    Najeeb Ullah
                </div>
            </nav>
        </div>
        @yield('admincontent')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
</body>
</html>
