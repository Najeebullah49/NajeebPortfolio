<?php
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CLanguageController;
use App\Http\Controllers\JavaController;
use App\Http\Controllers\CplusPlusController;
use App\Http\Controllers\HTMLController;
use App\Http\Controllers\CSSController;
use App\Http\Controllers\Bootsrap5Controller;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MedicalUserController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\MedicalDashboardController;
use App\Models\Measurement;
use App\Models\User; 
use App\Models\PortfolioUser;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return redirect()->route('home');
});
Route::get('/najeebm', function () {
    return view('najeebmeasurement');
});

Route::get('/home', function () {
    return view('Home');
})->name('home');

Route:: get('/tailorabout',function(){
    return view('about');
})->name('tailorabout');

Route:: get('/contactus',function(){
    return view('contactUs');
});

Route:: get('/signUp',function(){
    return view('signUp');
})->name('signUp');

Route:: get('/welcome',function(){
    return view('welcome');
});

Route:: get('/usersignIn',function(){
    return view('signIn');
})->name('userlogin');

Route:: get('/headerFooter',function(){
    return view('headerFooter');
});

Route:: get('/product',function(){
    return view('product');
});
Route::get('/productDetails', [UserController::class, 'displayProductDetails']);


//Ready made
Route:: get('/readymade_Details',function(){
    return view('readymade_Details');
});

Route:: get('/measurement',function(){
    return view('measurement');
})->name('measurement');

Route:: get('/footer',function(){
    return view('pages.footer');
});
Route:: get('/header',function(){
    return view('pages.header');
});

Route:: post('/registerUser',[UserController::class,'registerUser']);
Route:: post('/tailorloginUser',[UserController::class,'tailorloginUser'])->name('tailorloginUser');

Route:: get('/logout',[UserController::class,'userlogout'])->name('logout');


Route::get('/tailoruserprofile', [UserController::class, 'tailoruserprofile'])->name('tailoruserprofile');

Route::get('/masterLayout', function(){
    return view('masterLayout');
});

//User Profile
Route::get('/userprofile', [UserController::class, 'myprofile']);
//update user profile
Route::post('/update-profile-picture', [UserController::class, 'updateProfilePicture'])->name('update.profile.picture');


Route:: post('/uploadnewproduct',[AdminController::class,'addproduct']);
Route::get('/product', [UserController::class, 'displayProduct'])->name('product');
Route::get('/ready_made', [UserController::class, 'displayReadyMade'])->name('ready.made');
// store contact data 
Route::post('/contact.store', [ContactController::class, 'submit'])->name('contact.store');
Route::get('/usercontact',[AdminController::class, 'showContacts']);
// Contact submissions page

Route::get('/user-contact-history', [ContactController::class, 'showContacts'])->name('usercontacthistory');
  
// Submit measurement form
Route::post('/measurementstore', [MeasurementController::class, 'store'])->name('measurement.store');
// Fetch the measurement data
Route::get('/measurementDetails', [MeasurementController::class, 'measurementDetails'])->name('measurementDetails');
// Fetch login user measurement
Route::get('/measurements_index', [MeasurementController::class, 'index'])->name('measurements.index');
//showMeasurement
Route::get('/showmeasurement', [MeasurementController::class, 'showMeasurement'])->name('measurements.show');
//updateMeasurement
Route::post('/updatemeasurement', [MeasurementController::class, 'updateMeasurement'])->name('measurements.update');


Route::post('/place-order', [OrderController::class, 'store'])->name('place-order');
Route::get('/abproduct', [UserController::class, 'displayProduct'])->name('product');
Route::get('/displayOrder', [OrderController::class, 'showLoginUserOrders'])->name('displayOrder');
// Route::get('/displayOrder', [OrderController::class, 'showUserOrders'])->name('displayOrder');
//user pending
Route::get('/displayPendingOrder', [OrderController::class, 'showUserPendingOrders'])->name('displayPendingOrder');
//Change user name
Route::post('/update-user-name', [UserController::class, 'updateUserName'])->name('updateUserName');
//change user  email
Route::post('/update-user-email', [UserController::class, 'updateUserEmail'])->name('updateUserEmail');


// GET route for displaying the user profile
Route::get('/manageuserprofile', [UserController::class, 'manageProfile'])->name('usermanageprofile.show');

// POST route for updating the user profile
Route::post('/manageuserprofile', [UserController::class, 'updateProfile'])->name('usermanageprofile.update');
//Change user password
Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
//Inoice

// Define route for viewing the invoice
Route::get('/invoice', [OrderController::class, 'showInvoice'])->name('invoice.show');
//Download order
Route::get('/content/{orderId}', [OrderController::class, 'downloadInvoice'])->name('invoice.download');
//View 
Route::get('/userordersview/{orderId}', [OrderController::class, 'viewOrder'])->name('user.order.view');

Route::get('/orders/{orderId}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/invoice/view/all', [OrderController::class, 'showallInvoice'])->name('showall.orders');


// Admin site routes
Route::get('/tailornajeebmaster', function () {
    return view('admin.adminlayouts.adminLayout');
});

Route::get('/najeebmaster', [AdminController::class, 'adminSmallProfile']);

//order
Route::get('/orders', function () {
    return view('admin.orders');
});

Route::get('/test', function () {
    return view('test');
});
//Checkout
Route::get('/checkout', function () {
    return view('checkout');
});

//admin site
//upload product
Route:: get('/uploadProduct', function(){
    return view('admin/uploadProduct');          
});
//Display product
Route::get('/productlist', [AdminController::class, 'ProductList']);
//Admin product Detail
Route::get('/admin_productDetails', [AdminController::class, 'AdminproductDetails'])->name('admin.productDetails');
//Dashboard

Route::get('/displayDashboard', [DashboardController::class, 'showDashboard'])->name('displayDashboard');



Route::get('/customers', [AdminController::class, 'customersDetails']);


//Order Details

Route::get('/ordersdetails', [AdminController::class, 'showOrders']);

//Pending Orders
Route::get('/pendingorders', [AdminController::class, 'pendingOrders']);
//Cancelled Orders
Route::get('/cancelleddorders', [AdminController::class, 'cancelledOrders']);

//Completed Orders
Route::get('/completedorders', [AdminController::class, 'paidOrders']);
// View order
Route::get('/orders/view/{orderId}', [AdminController::class, 'viewOrder'])->name('orders.view');
//Measurements
Route::get('/measurements', [MeasurementController::class, 'measurements']);

//Admin Profile
Route::get('/adminprofile',[AdminController::class, 'adminProfile']);


//Update status
Route::post('/admin/orders/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.orders.updateStatus');
// Update admin name
Route::post('/admin/update-name', [AdminController::class, 'updateName'])->name('admin.updateName');
// Update email
Route::post('/admin/update-email', [AdminController::class, 'updateEmail'])->name('admin.updateEmail');
//Change admin picture
Route::post('/admin/update-photo', [AdminController::class, 'updatePicture'])->name('admin.updatePicture');
//Admin password change
Route::post('/admin/change-password', [AdminController::class, 'changePassword'])->name('admin.changePassword');
// Setting admin manage profile
Route::get('/s_a_manageprofile', [AdminController::class, 'settingupdateProfile'])->name('s_a_manageprofile');

// Profile page
Route::get('/admin_manageprofile', [AdminController::class, 'updateProfile'])->name('admin.manage.profile');
// Admin register
Route::get('tailoradminregister', function(){

    return view('admin.admin_register');
})->name('admin.register');
Route::post('/registeradmin', [AdminController::class, 'AdminRegister'])->name('admin.register');
//Chart
Route::get('/charts', [OrderController::class, 'showCharts'])->name('charts');
Route::get('/tailorprofits', [AdminController::class, 'showProfits'])->name('tailor.profits');
//view user pendding
Route::get('/viewuserpendding/{orderId}', [OrderController::class, 'ViewUserPendding'])->name('view.user.pendding');
//Register Admin
Route:: post('/registerAdmin',[UserController::class,'registerAdmin'])->name('register.Admin');
Route:: get('/signUpAdmin',function(){
    return view('admin/admin_register');
})->name('signUpAdmin');
//Eech user Measurement
Route::get('/eachuser/{orderId}',[MeasurementController::class,'EachUserMeasurement'])->name('each.user');
//user Contact History
Route::get('/adminusercontact',[ContactController::class,'showUserContacts']);
//Admin logout
Route:: get('/tailoradminlogout',[AdminController::class,'tailoradminLogout']);



//Najeeb Portfolio
Route:: get('/pusersignUp',function(){
    return view('portfolio.psignup');
})->name('pusersignUp');

Route:: get('/pusersignIn',function(){
    return view('portfolio.psignin');
})->name('pusersignIn');


Route::get('/', function () {
    return view('portfolio.portfoliohome');
})->name('/');

//Contact 
Route::get('/contact', function () {
    return view('portfolio.contact');
});
//About
Route::get('/about', function () {
    return view('portfolio.about');
});
//About
Route::get('/skills', function () {
    return view('portfolio.skills');
});
//Projects
Route::get('/projects', function () {
    return view('portfolio.projects');
});
//FAQs
Route::get('/faqs', function () {
    return view('portfolio.faqs');
});

Route::get('/pcontact', function () {
    return view('portfolio.portfoliocontacthistory');
});

Route:: post('/registerPortfolioUser',[PortfolioController::class,'registerPortfolioUser']);
Route:: post('/portfolioUserLogin',[PortfolioController::class,'portfoliologinUser'])->name('portfolioUserLogin');
// portfolioProfile
Route::get('/portfolioProfile',[PortfolioController::class, 'portfolioProfile']);
Route::get('/showPortfolioUserContacts',[ContactController::class,'showPortfolioUserContacts'])->name('pcontact');

Route::post('/pcontact.store', [ContactController::class, 'psubmit'])->name('pcontact.store');
Route::get('/puserprofile', [PortfolioController::class, 'pmyprofile']);
//update portfolio user profile
Route::post('/pupdate-profile-picture', [PortfolioController::class, 'pupdateProfilePicture'])->name('pupdate.profile.picture');
//Change user name
Route::post('/pupdate-user-name', [PortfolioController::class, 'pupdateUserName'])->name('pupdateUserName');
//change portfolio  user  email
Route::post('/pupdate-user-email', [PortfolioController::class, 'pupdateUserEmail'])->name('pupdateUserEmail');
//Change portfolio  user password
Route::post('/puser/update-password', [PortfolioController::class, 'pupdatePassword'])->name('puser.updatePassword');
// GET route for displaying the portfolio user profile
Route::get('/pmanageuserprofile', [PortfolioController::class, 'pmanageProfile'])->name('pusermanageprofile.show');

// POST route for updating the user profile
Route::post('/pmanageuserprofile', [PortfolioController::class, 'pupdateProfile'])->name('pusermanageprofile.update');







//Medical Store
Route:: get('/medicalsignin',function(){
    return view('medicalstore.signIn');
})->name('medicallogin');
Route::get('/medicalhome', function () {
    return view('medicalstore.medicaldashboard');
})->name('medicalhome');
Route:: get('/medicalsignUp',function(){
    return view('medicalstore.signUp');
})->name('medicalsignUp');
Route:: get('/headerFooter',function(){
    return view('headerFooter');
});
Route:: get('/footer',function(){
    return view('pages.footer');
});
Route:: get('/header',function(){
    return view('pages.header');
});
Route:: post('/registerMedicalUser',[MedicalUserController::class,'registerMedicalUser'])->name('register.Medical.User');
Route:: post('/loginMedicalUser',[MedicalUserController::class,'loginMedicalUser'])->name('login.Medical.User');;
//admin site
Route::get('/medicalDashboard', [ medicalDashboardController::class, 'showMedicalDashboard'])->name('display.medical.Dashboard');
Route::get('/customers', [AdminController::class, 'customersDetails']);
//Admin Profile 
Route::get('/medicaladminprofile',[AdminController::class, 'MedicaladminProfile']);
Route::post('/madmin/update-name', [AdminController::class, 'mupdateName'])->name('madmin.updateName');
// Update email
Route::post('/madmin/update-email', [AdminController::class, 'mupdateEmail'])->name('madmin.updateEmail');
//Change admin picture
Route::post('/madmin/update-photo', [AdminController::class, 'mupdatePicture'])->name('madmin.updatePicture');
//Admin password change
Route::post('/madmin/change-password', [AdminController::class, 'mchangePassword'])->name('madmin.changePassword');
// Setting admin manage profile
Route::get('/s_a_manageprofile', [AdminController::class, 'settingupdateProfile'])->name('s_a_manageprofile');

// Profile page
Route::get('/admin_manageprofile', [AdminController::class, 'updateProfile'])->name('admin.manage.profile');
// Admin register
Route::get('admin_register', function(){

    return view('medicalstore.admin_register');
})->name('admin.register');
Route::post('/registeradmin', [AdminController::class, 'AdminRegister'])->name('admin.register');
//Chart
Route::get('/charts', [OrderController::class, 'showCharts'])->name('charts');
Route::get('/profits', [AdminController::class, 'showMedicalProfits'])->name('medical.profits');
//view user pendding

Route:: post('/registerAdmin',[UserController::class,'registerAdmin'])->name('register.Admin');
Route:: get('/signUpAdmin',function(){
    return view('admin/admin_register');
})->name('signUpAdmin');
Route::get('/medicalcustomers', [AdminController::class, 'customerMedicalsDetails']);
//Admin logout
Route:: get('/adminlogout',[UserController::class,'adminLogout']);
Route::get('/uploadstock', [StockController::class, 'index'])->name('stock.index');
Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
Route::get('/sold', [StockController::class, 'sold'])->name('sold.stock');
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
Route::post('/invoice/sell', [InvoiceController::class, 'sell'])->name('invoice.sell');
Route::get('/invoice/print/{id}', [InvoiceController::class, 'print'])->name('invoice.print');
Route:: get('/template', function(){
    return view('admin/template');          
});
Route::post('/invoice.store', [InvoiceController::class, 'store'])->name('invoice.store');
Route::get('/invoice_list', [InvoiceController::class, 'invoice_list'])->name('admin.invoice_list');
Route::get('/current_stock', [InvoiceController::class, 'current_stock'])->name('current.stock');

// Invoices Filter Routes
Route::get('/invoices/daily', [InvoiceController::class, 'dailyInvoices'])->name('invoices.daily');
Route::get('/invoices/weekly', [InvoiceController::class, 'weeklyInvoices'])->name('invoices.weekly');
Route::get('/invoices/monthly', [InvoiceController::class, 'monthlyInvoices'])->name('invoices.monthly');
Route::get('/invoices/yearly', [InvoiceController::class, 'yearlyInvoices'])->name('invoices.yearly');
Route::get('/print/{id}', [InvoiceController::class, 'print'])->name('admin.print');


    Route::get('/invoices/{id}', [App\Http\Controllers\InvoiceController::class, 'show'])->name('admin.invoices.show');
    Route::get('/invoices/{id}/edit', [App\Http\Controllers\InvoiceController::class, 'edit'])->name('admin.invoices.edit');
    Route::put('/invoices/{id}', [App\Http\Controllers\InvoiceController::class, 'update'])->name('invoice.update');
    Route::delete('/invoices/{id}', [App\Http\Controllers\InvoiceController::class, 'destroy'])->name('admin.invoices.destroy');

Route::get('/stock/{id}', [StockController::class, 'showStock'])->name('stock.show');
Route::get('/stock/{id}/edit', [StockController::class, 'editStock'])->name('stock.edit');
Route::delete('/stock/{id}', [StockController::class, 'destroyStock'])->name('stock.destroy');


Route::put('/stock/{id}', [StockController::class, 'updateStock'])->name('stock.update');
Route::get('/najeebmaster', [AdminController::class, 'MedicaladminSmallProfile']);

Route:: get('/adminlogout',[MedicalUserController::class,'MedicaladminLogout']);


// C Language


Route::get('/c-course', [CLanguageController::class, 'CLanguageCourse'])->name('c-course');
// C Plus Plus
Route::get('/c-plus-plus-course', [CplusPlusController::class, 'CplusPlusCourse'])->name('c-plus-plus-course');

// Java
Route::get('/java-course', [JavaController::class, 'JavaCourse'])->name('java-course');
// HTML
Route::get('/html-course', [HTMLController::class, 'HTMLCourse'])->name('html-course');
// CSS
Route::get('/css-course', [CSSController::class, 'CSSCourse'])->name('css-course');
// Bootsrap5
Route::get('/bootsrap5-course', [Bootsrap5Controller::class, 'Bootsrap5Course'])->name('bootsrap5-course');
// Laravel
Route::get('/laravel-course', [LaravelController::class, 'LaravelCourse'])->name('laravel-course');
