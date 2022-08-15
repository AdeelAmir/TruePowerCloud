<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteHelper
{
    public static function checkForPaymentDetails()
    {
        $Profile = DB::table('profiles')
            ->where('user_id', '=', Auth::id())
            ->get();
        if($Profile[0]->card_holder_name == '' || $Profile[0]->card_number == '' || $Profile[0]->card_cvv == '' || $Profile[0]->card_expiration_month == '' || $Profile[0]->card_expiration_year == '') {
            return false;
        } else {
            return true;
        }
    }

    public static function GetLoggedInUser()
    {
        $Profile = DB::table('profiles')
            ->where('user_id', '=', Auth::id())
            ->get();
        return $Profile;
    }

    public static function GetPackageTitles($PackageId)
    {
        if($PackageId == 1) {
            return 'Basic';
        } elseif($PackageId == 2) {
            return 'Silver';
        } elseif($PackageId == 3) {
            return 'Enterprise';
        } elseif($PackageId == 4) {
            return 'Premium VPS';
        }
        return '';
    }

    public static function GetPackagePrices($PackageId)
    {
        if($PackageId == 1) {
            return 25;
        } elseif($PackageId == 2) {
            return 50;
        } elseif($PackageId == 3) {
            return 100;
        } elseif($PackageId == 4) {
            return 200;
        }
        return 0;
    }

    public static function CheckForProductInCart($PackageId)
    {
        $cart = array();
        if(request()->cookie('tru_power_cloud_shopping_cart') != ''){
            $cart = (array) json_decode(request()->cookie('tru_power_cloud_shopping_cart'));
        }

        if(isset($cart[$PackageId])) {
            return true;
        } else {
            return false;
        }
    }
}