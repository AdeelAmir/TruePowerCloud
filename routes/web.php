<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Auth::routes();

//Command Routes
Route::get('clear-cache', function () {
    Artisan::call('storage:link');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    //Create storage link on hosting
    $exitCode = Artisan::call('storage:link', []);
    echo $exitCode; // 0 exit code for no errors.
});

Route::get('/', function (){
    return redirect()->to('login');
});

Route::get('/home', function (){
//    return redirect()->to('login');
});

Route::middleware(['auth'])->group(function (){
    /*Common Routes*/
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/services/order', [HomeController::class, 'orderNewHosting'])->name('services.order');
    Route::get('/services/order/domain/{Package}', [HomeController::class, 'orderNewHostingDomain'])->name('services.order.domain');

    /*Cart*/
    Route::post('/cart/items/add', [HomeController::class, 'addToCart'])->name('cart.items.add');
    Route::post('/cart/items/remove', [HomeController::class, 'removeFromCart'])->name('cart.items.remove');
    Route::post('/cart/items/count', [HomeController::class, 'cartItemsCount'])->name('cart.items.count');
    Route::post('/cart/page/html', [HomeController::class, 'LoadCartTableBodyHtml'])->name('cart.page.html');

    Route::get('/services/hosting/cart', [HomeController::class, 'hostingCart'])->name('services.hosting.cart');
    Route::get('/services/hosting/checkout', [HomeController::class, 'hostingCheckout'])->name('services.hosting.checkout');
    Route::get('/services/hosting/checkout/summary', [HomeController::class, 'hostingCheckoutSummary'])->name('services.hosting.checkout.summary');
    Route::get('/services/hosting/change', [HomeController::class, 'changeHostingPlan'])->name('services.hosting.change');
    Route::get('/domains', [HomeController::class, 'myDomains'])->name('domains');
    Route::get('/support/tickets/create', [HomeController::class, 'createSupportTicket'])->name('support.tickets.create');
    Route::get('/support/tickets/manage', [HomeController::class, 'manageSupportTicket'])->name('support.tickets.manage');
    Route::get('/support/ticket', [HomeController::class, 'singleSupportTicket'])->name('support.ticket');

    /*Account Page*/
    Route::get('/account', [HomeController::class, 'account'])->name('account');
    Route::get('/account/invoices/manage', [HomeController::class, 'manageInvoices'])->name('invoices.manage');
    Route::get('/account/password/change', [HomeController::class, 'changePassword'])->name('account.security.change-password');
    Route::get('/account/payment-methods', [HomeController::class, 'paymentMethods'])->name('account.payment-methods');
    Route::post('/account/profile/update', [HomeController::class, 'accountProfileUpdate'])->name('account.profile.update');

    Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
    Route::get('/logout', [HomeController::class, 'logout'])->name('dashboard.logout');

    /*Admin Specific Routes*/
    Route::middleware('route_validator')->group(function (){

    });

    /*User Routes*/
});