<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    var $CartTimeout = 60;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('portal.dashboard');
    }

    public function services()
    {
        return view('portal.services');
    }

    public function orderNewHosting()
    {
        return view('portal.order-new-hosting');
    }

    public function orderNewHostingDomain($Package)
    {
        return view('portal.domain', compact('Package'));
    }

    public function addToCart(Request $request)
    {
        $Package = $request->post('Package');
        $PackageTitle = SiteHelper::GetPackageTitles($Package);
        $PackagePrice = SiteHelper::GetPackagePrices($Package);
        $PackageQuantity = 1;
        $PackageDuration = '1 Month';
        $DomainType = $request->post('DomainType');
        $Domain = $request->post('Domain');
        $DomainPrice = 0;
        /*New Domain*/
        if($DomainType == 1) {
            $DomainPrice = 18;
        }
        $DomainQuantity = 1;
        $DomainDuration = '1 Year';

        $SubTotal = $PackagePrice + $DomainPrice;
        $Tax = 0;
        $Total = $SubTotal - $Tax;

        $cart = array();
        if(request()->cookie('tru_power_cloud_shopping_cart') != ''){
            $cart = (array) json_decode(request()->cookie('tru_power_cloud_shopping_cart'));
        }

        if(!isset($cart[$Package])) {
            $cart[$Package] = [
                "package" => $Package,
                "packageTitle" => $PackageTitle,
                "packagePrice" => $PackagePrice,
                "packageDuration" => $PackageDuration,
                "packageQuantity" => $PackageQuantity,
                "domainTitle" => $Domain,
                "domainPrice" => $DomainPrice,
                "domainDuration" => $DomainDuration,
                "domainQuantity" => $DomainQuantity,
                'domainType' => $DomainType,
                "cartSubTotal" => $SubTotal,
                "tax" => $Tax,
                "cartTotal" => $Total
            ];
        }

        $cart = json_encode($cart);
        $minutes = $this->CartTimeout;
        $response = new \Illuminate\Http\Response('Package added to cart');
        $response->withCookie(cookie('tru_power_cloud_shopping_cart', $cart, $minutes));
        return $response;
    }

    public function removeFromCart(Request $request)
    {
        $Package = $request->post('Package');
        $cart = array();
        if(request()->cookie('tru_power_cloud_shopping_cart') != ''){
            $cart = (array) json_decode(request()->cookie('tru_power_cloud_shopping_cart'));
        }
        if(isset($cart[$Package])) {
            unset($cart[$Package]);
        }
        $cart = json_encode($cart);
        $minutes = $this->CartTimeout;
        $response = new \Illuminate\Http\Response('Package removed from cart');
        $response->withCookie(cookie('tru_power_cloud_shopping_cart', $cart, $minutes));
        return $response;
    }

    public function cartItemsCount(Request $request)
    {
        $Cart = (array) json_decode(request()->cookie('tru_power_cloud_shopping_cart'));
        return sizeof($Cart);
    }

    function GetCartItems(Request $request){
        $CartItems = (array) json_decode(request()->cookie('tru_power_cloud_shopping_cart'));
        return $CartItems;
    }

    public function LoadCartTableBodyHtml(Request $request)
    {
        $CartItems = (array) json_decode(request()->cookie('tru_power_cloud_shopping_cart'));
        $CartCount = sizeof($CartItems);
        $ResponseArray = array();
        $Html = '';
        $CartSubTotal = 0;
        $CartTax = 0;
        $CartTotal = 0;

        if($CartCount == 0){
            $Html .= '
                    <tr>
                        <td colspan="5" class="text-center">Cart is empty</td>
                    </tr>';
        } else {
            foreach($CartItems as $index => $cartItem){
                $Html .= '
                    <tr>
                        <td>' . $cartItem->packageTitle . ' <br> <small>for ' . $cartItem->domainTitle . '</small></td>
                        <td class="fw-bold">$' . $cartItem->packagePrice . '</td>
                        <td>
                            ' . $cartItem->packageDuration . '
                        </td>
                        <td class="fw-bold">$' . $cartItem->packagePrice . '</td>
                        <td rowspan="2">
                            <div class="d-flex">
                                <a class="btn text-danger bg-danger-transparent btn-icon" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="RemoveFromCart(\' '. $cartItem->package. '\');"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>';
                if($cartItem->domainType == 1) {
                    $Html .= '
                    <tr>
                        <td>' . $cartItem->domainTitle . '</td>
                        <td class="fw-bold">$' . $cartItem->domainPrice . '</td>
                        <td>
                            ' . $cartItem->domainDuration . '
                        </td>
                        <td class="fw-bold">$' . $cartItem->domainPrice . '</td>
                    </tr>';
                } else {
                    $Html .= '
                    <tr>
                        <td>' . $cartItem->domainTitle . '</td>
                        <td class="fw-bold">$' . $cartItem->domainPrice . '</td>
                        <td></td>
                        <td class="fw-bold">$' . $cartItem->domainPrice . '</td>
                    </tr>';
                }
                $CartSubTotal += $cartItem->cartSubTotal;
                $CartTax += $cartItem->tax;
                $CartTotal += $cartItem->cartTotal;
            }
        }
        $ResponseArray['tableBody'] = $Html;
        $ResponseArray['subTotal'] = $CartSubTotal;
        $ResponseArray['tax'] = $CartTax;
        $ResponseArray['total'] = $CartTotal;
        echo json_encode($ResponseArray);
        exit();
    }

    public function hostingCart()
    {
        return view('portal.hosting-cart');
    }

    public function hostingCheckout()
    {
        return view('portal.hosting-checkout');
    }

    public function hostingCheckoutSummary()
    {
        return view('portal.summary');
    }

    public function changeHostingPlan()
    {
        return view('portal.change-hosting-plan');
    }

    public function myDomains()
    {
        return view('portal.domains');
    }

    function singleSupportTicket()
    {
        return view('portal.single-support-ticket');
    }

    function createSupportTicket()
    {
        return view('portal.create-support-ticket');
    }

    function manageSupportTicket()
    {
        return view('portal.support-tickets');
    }

    function account()
    {
        $Profile = DB::table('profiles')
            ->join('users','profiles.user_id', '=', 'users.id')
            ->where('user_id', '=', Auth::id())
            ->select('profiles.*', 'users.email')
            ->get();
        return view('portal.account', compact('Profile'));
    }

    function manageInvoices()
    {
        return view('portal.manage-invoices');
    }

    function changePassword()
    {
        return view('portal.change-password');
    }

    function paymentMethods()
    {
        $Profile = DB::table('profiles')
            ->where('user_id', '=', Auth::id())
            ->get();
        return view('portal.payment-methods', compact('Profile'));
    }

    function notifications()
    {
        return view('portal.notifications');
    }

    function accountProfileUpdate(Request $request)
    {
        $Type = $request->post('type');
        if($Type == 'general') {
            $FirstName = $request->post('first_name');
            $LastName = $request->post('last_name');
            $Phone = $request->post('phone');
            $Address = $request->post('address');
            $State = $request->post('state');
            $City = $request->post('city');
            $Zip = $request->post('zip');
            $Affected = DB::table('profiles')
                ->where('user_id', '=', Auth::id())
                ->update([
                    'first_name' => $FirstName,
                    'last_name' => $LastName,
                    'phone' => $Phone,
                    'address' => $Address,
                    'state' => $State,
                    'city' => $City,
                    'zip' => $Zip,
                    'updated_at' => Carbon::now()
                ]);
            return redirect()->route('account')->with('success', 'Profile updated successfully');
        } elseif($Type == 'security') {
            $OldPassword = $request->post('old_password');
            $NewPassword = $request->post('new_password');
            $ConfirmPassword = $request->post('confirm_password');
            /*Checking Old Password*/
            $User = DB::table('users')
                ->where('id', '=', Auth::id())
                ->get();
            if(sizeof($User) > 0){
                if (Hash::check($OldPassword, $User[0]->password)) {
                    /*Check for Confirm Password*/
                    if($NewPassword == $ConfirmPassword) {
                        $NewPassword = Hash::make($NewPassword);
                        DB::table('users')
                            ->where('id', '=', Auth::id())
                            ->update([
                                'password' => $NewPassword,
                                'updated_at' => Carbon::now()
                            ]);
                        return redirect()->route('account.security.change-password')->with('success', 'Password changed successfully');
                    } else {
                        return redirect()->route('account.security.change-password')->with('error', 'Password and confirm password not match');
                    }
                } else {
                    return redirect()->route('account.security.change-password')->with('error', 'Incorrect old password');
                }
            } else {
                return redirect()->route('account.security.change-password')->with('error', 'An unhandled error occurred');
            }
        } elseif($Type == 'payment') {
            $CardHolderName = base64_encode($request->post('card_holder_name'));
            $CardNumber = base64_encode($request->post('card_number'));
            $CardCVV = base64_encode($request->post('card_cvv'));
            $CardExpirationMonth = base64_encode($request->post('card_expiration_month'));
            $CardExpirationYear = base64_encode($request->post('card_expiration_year'));

            $Affected = DB::table('profiles')
                ->where('user_id', '=', Auth::id())
                ->update([
                    'card_holder_name' => $CardHolderName,
                    'card_number' => $CardNumber,
                    'card_cvv' => $CardCVV,
                    'card_expiration_month' => $CardExpirationMonth,
                    'card_expiration_year' => $CardExpirationYear,
                    'updated_at' => Carbon::now()
                ]);
            return redirect()->route('account.payment-methods')->with('success', 'Card information updated successfully');
        }
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}