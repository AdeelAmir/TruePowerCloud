@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">
        <div class="page-header">
            <h1 class="page-title">Order New Services</h1>
        </div>

        @if(!\App\Helpers\SiteHelper::checkForPaymentDetails())
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        Please complete your payment details. Go to <a class="text-danger fw-bold" style="text-decoration: underline;" href="{{route('account.payment-methods')}}">payment settings page</a>.
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="card-title mb-3">
                    Secure web hosting that grows with your business
                </h3>
                <h5 class="mb-4">
                    Premium web hosting with 24/7/365 technical support, 99.99% uptime and a risk-free money-back
                    guarantee.
                </h5>
            </div>

            <div class="col-sm-6 col-xl-3 col-md-6 col-lg-6 primary">
                <div class="card border border-secondary p-1">
                    <div class="princing-item">
                        <div class="pricing-divider text-center pt-5">
                            <h2 class="text-primary">{{\App\Helpers\SiteHelper::GetPackageTitles(1)}}</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                       enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#6C5FFC" d="M7.0009766,13c-0.8284302,0-1.5,0.6715698-1.5,1.5s0.6715698,1.5,1.5,1.5c0.828064-0.0009155,1.4991455-0.671936,1.5-1.5C8.5009766,13.6715698,7.8294067,13,7.0009766,13z M7.0009766,15c-0.276123,0-0.5-0.223877-0.5-0.5s0.223877-0.5,0.5-0.5c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5C7.5009766,14.776123,7.2771606,15,7.0009766,15z M13.5,14h-3c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3c0.276123,0,0.5-0.223877,0.5-0.5S13.776123,14,13.5,14z M20.1950684,10.25177l-1.5505371-4.8230591C18.1824341,3.9794922,16.8345947,2.9967651,15.3135376,3H8.6865234C7.1654053,2.9967041,5.8175659,3.9794312,5.3554688,5.4286499L3.8049316,10.25177C2.7443848,10.7144775,2.0013428,11.7692261,2,13v3c0.0016479,1.4848633,1.083252,2.7087402,2.5,2.9490967V20.5c0,0.0001831,0,0.0003662,0,0.0005493C4.5001831,20.7765503,4.723999,21.0001831,5,21c0.0001831,0,0.0003662,0,0.0006104,0C5.2765503,20.9998169,5.5001831,20.776001,5.5,20.5V19h13v1.5c0,0.0001831,0,0.0003662,0,0.0005493C18.5001831,20.7765503,18.723999,21.0001831,19,21c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-1.5509033C20.916748,18.7087402,21.9983521,17.4848633,22,16v-3C21.9986572,11.7692261,21.2556152,10.7144775,20.1950684,10.25177z M6.3066406,5.7353516C6.6368408,4.6999512,7.5997314,3.9978638,8.6864624,4h6.6270142c1.086792-0.0021973,2.0496826,0.6999512,2.3798828,1.7353516L19.0644531,10H19H5H4.9355469L6.3066406,5.7353516z M21,16c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-3c0.0014038-1.1040039,0.8959961-1.9985962,2-2h14c1.1040039,0.0014038,1.9985962,0.8959961,2,2V16z M17.0009766,13c-0.8284302,0-1.5,0.6715698-1.5,1.5s0.6715698,1.5,1.5,1.5c0.828064-0.0009155,1.4991455-0.671936,1.5-1.5C18.5009766,13.6715698,17.8294067,13,17.0009766,13z M17.0009766,15c-0.276123,0-0.5-0.223877-0.5-0.5s0.223877-0.5,0.5-0.5c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5C17.5009766,14.776123,17.2771606,15,17.0009766,15z"></path>
                                </svg>
                            </span>
                            <h4 class="display-5 text-primary fw-bold my-3"><span class="h3">${{\App\Helpers\SiteHelper::GetPackagePrices(1)}}</span> <span
                                        class="h5">/month</span></h4>
                        </div>
                        <div class=" br-be-0 br-bs-0 bg-white mt-0 shadow">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                            class="fa fa-check text-primary p-2 fw-bold"></i><b>10GB</b> SSD Storage
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Unlimtied</b>
                                    Bandwidth
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Email
                                        Accounts</b>&nbsp;&nbsp;<span class="fw-bold text-white">2</span>
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>
                                        24/7</b> support
                                </li>
                                <li class="list-group-item border-bottom-0"><i
                                            class="fa fa-checktext-primary p-2 fw-bold"></i><b>Help center access</b>
                                </li>
                            </ul>
                            <div class="card-footer text-center p-5">
                                @if(!\App\Helpers\SiteHelper::checkForPaymentDetails())
                                    <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                @else
                                    @if(\App\Helpers\SiteHelper::CheckForProductInCart(1))
                                        <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                    @else
                                        <a class="btn btn-primary btn-block" href="{{route('services.order.domain', array(1))}}">Buy Now</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 col-md-6 col-lg-6 danger">
                <div class="card border border-secondary p-1">
                    <div class="princing-item">
                        <div class="pricing-divider text-center pt-5">
                            <h2 class="text-danger">{{\App\Helpers\SiteHelper::GetPackageTitles(2)}}</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                       enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#E82646" d="M16,14.375c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S16.3451538,14.375,16,14.375z M19.0561523,19.3491211c1.6499634-0.93396,2.5132446-2.8222046,2.1401367-4.6810913l-1.6933594-9C19.1010742,3.541687,17.2440186,2.0015869,15.0800781,2H8.9199219C6.7559814,2.0015869,4.8989258,3.541687,4.4970703,5.6680298l-1.6933594,9c-0.3731079,1.8588867,0.4901733,3.7471313,2.1401367,4.6810913l-1.7973633,1.7973633c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702c0.1918335,0.1986694,0.5083618,0.2041626,0.7069702,0.0122681c0.0042114-0.0039673,0.0083008-0.0080566,0.0122681-0.0122681l2.0700073-2.0699463C6.3444214,19.9196777,6.7832031,19.9926758,7.2255859,20h9.5488281c0.4423218-0.0073242,0.8811646-0.0803223,1.302063-0.2164917l2.0700073,2.0700073c0.1986084,0.1918335,0.5151367,0.1863403,0.7069702-0.0122681c0.1871948-0.1937256,0.1871948-0.5009766,0-0.6947632L19.0561523,19.3491211z M5.4794922,5.8535156C5.7920532,4.1994629,7.2365723,3.0013428,8.9199219,3h6.1601562c1.6833496,0.0013428,3.1278687,1.1994629,3.4404297,2.8535156l0.4643555,2.4680176c-2.6467285,3.857605-7.9196167,4.8392334-11.7772217,2.1925049C6.3481445,9.9243164,5.6048584,9.1810303,5.0151367,8.3215332L5.4794922,5.8535156z M17.4196777,18.9398804C17.2069092,18.9797974,16.9909058,18.999939,16.7744141,19H7.2255859c-1.9332275-0.0004272-3.500061-1.5679932-3.4995728-3.5012207c0.000061-0.2164917,0.0201416-0.4324951,0.0601196-0.6452637l0.979187-5.2042847c3.3881836,3.9956055,9.3739014,4.4880371,13.3695068,1.0998535c0.3961182-0.3359375,0.7639771-0.7037354,1.0998535-1.0998535l0.979187,5.2042847C20.5706787,16.75354,19.3196411,18.5830688,17.4196777,18.9398804z M8,14.375c-0.3451538,0-0.625,0.2798462-0.625,0.625S7.6548462,15.625,8,15.625S8.625,15.3451538,8.625,15S8.3451538,14.375,8,14.375z"></path>
                                </svg>
                            </span>
                            <h4 class="display-5 text-danger fw-bold my-3"><span class="h3">${{\App\Helpers\SiteHelper::GetPackagePrices(2)}}</span> <span
                                        class="h5">/month</span></h4>
                        </div>
                        <div class=" br-be-0 br-bs-0 bg-white mt-0 shadow">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                            class="fa fa-check text-primary p-2 fw-bold"></i><b>25GB</b> SSD Storage
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Unlimtied</b>
                                    Bandwidth
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Email
                                        Accounts</b>&nbsp;&nbsp;<i class="fa-solid fa-infinity fw-bold text-white"></i>
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>
                                        24/7</b> support
                                </li>
                                <li class="list-group-item border-bottom-0"><i
                                            class="fa fa-checktext-primary p-2 fw-bold"></i><b>Help center access</b>
                                </li>
                            </ul>
                            <div class="card-footer text-center p-5">
                                @if(!\App\Helpers\SiteHelper::checkForPaymentDetails())
                                    <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                @else
                                    @if(\App\Helpers\SiteHelper::CheckForProductInCart(2))
                                        <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                    @else
                                        <a class="btn btn-primary btn-block" href="{{route('services.order.domain', array(2))}}">Buy Now</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 col-md-6 col-lg-6 success">
                <div class="card border border-secondary p-1">
                    <div class="princing-item">
                        <div class="pricing-divider text-center pt-5">
                            <h2 class="text-success">{{\App\Helpers\SiteHelper::GetPackageTitles(3)}}</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                       enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#09AD95" d="M20.743103,3.2568359c-1.0223389-0.9765625-2.631897-0.9765625-3.6542969,0l-3.0234375,3.0234375l-6.78125-2.2607422C7.1043091,3.9615479,6.9071655,4.0081787,6.7723999,4.140625L4.414978,6.4990234C4.3724365,6.5415039,4.3379517,6.5913086,4.3130493,6.6460571C4.1989746,6.8973389,4.3102417,7.1935425,4.5615234,7.3076172l5.828064,2.6484375l-3.3623047,3.3623047l-2.0351562-1.0185547c-0.192688-0.0949707-0.4243774-0.057373-0.5771484,0.09375l-1.7684937,1.7685547c-0.000061,0.000061-0.0001221,0.0001221-0.0001221,0.0001831c-0.1951904,0.1952515-0.1951294,0.5117188,0.0001221,0.7068481l6.484375,6.484375C9.2244873,21.4474487,9.3517456,21.5001831,9.484375,21.5c0.1326294,0.0001831,0.2598877-0.0525513,0.3535156-0.1464844l1.7686157-1.7685547c0.1519775-0.1522827,0.1897583-0.3845825,0.09375-0.5771484l-1.0175781-2.0361328l3.3613281-3.3613281l2.6483765,5.828186c0.067627,0.1495972,0.2046509,0.2562256,0.3662109,0.2851562c0.1612549,0.0283813,0.3262329-0.0233154,0.4423828-0.1386719l2.3574219-2.3584595c0.1337891-0.1339722,0.1806641-0.3319702,0.1210938-0.5117188l-2.2597656-6.7802734l3.0233765-3.0234375C21.749939,5.901062,21.749939,4.2668457,20.743103,3.2568359z M20.0361328,6.2041016l-3.2421875,3.2421875c-0.1337891,0.1339722-0.1806641,0.3319702-0.1210938,0.5117188l2.2598267,6.7802734l-1.6289062,1.6289062l-2.6484375-5.8271484c-0.067627-0.1495972-0.2045898-0.2562866-0.3662109-0.2851562c-0.1610718-0.0258789-0.3248901,0.0254517-0.4423828,0.1386719l-4.1259766,4.1259766c-0.1520386,0.1522827-0.1897583,0.3845825-0.09375,0.5771484l1.0175171,2.0361328L9.484375,20.2929688L3.7069702,14.515625l1.1602173-1.1601562l2.0351562,1.0185547c0.192688,0.0951538,0.4244995,0.0574951,0.5771484-0.09375l4.1270142-4.1269531c0.0425415-0.0424805,0.0770264-0.0922852,0.1019287-0.1470337c0.1140747-0.2512817,0.0028687-0.5474854-0.2484131-0.6615601l-5.828186-2.6484375l1.6289062-1.6298828l6.78125,2.2607422c0.1797485,0.0601807,0.3780518,0.0132446,0.5117188-0.1210938l3.2421875-3.2421875c0.6271362-0.5976562,1.6130981-0.5976562,2.2402344,0C20.6533203,4.5830688,20.6533203,5.5848999,20.0361328,6.2041016z"></path>
                                </svg>
                            </span>
                            <h4 class="display-5 text-success fw-bold my-3"><span class="h3">${{\App\Helpers\SiteHelper::GetPackagePrices(3)}}</span> <span
                                        class="h5">/month</span></h4>
                        </div>
                        <div class=" br-be-0 br-bs-0 bg-white mt-0 shadow">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                            class="fa fa-check text-primary p-2 fw-bold"></i><b>50GB</b> SSD Storage
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Unlimtied</b>
                                    Bandwidth
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Email
                                        Accounts</b>&nbsp;&nbsp;<i class="fa-solid fa-infinity fw-bold text-white"></i>
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>
                                        24/7</b> support
                                </li>
                                <li class="list-group-item border-bottom-0"><i
                                            class="fa fa-checktext-primary p-2 fw-bold"></i><b>Help center access</b>
                                </li>
                            </ul>
                            <div class="card-footer text-center p-5">
                                @if(!\App\Helpers\SiteHelper::checkForPaymentDetails())
                                    <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                @else
                                    @if(\App\Helpers\SiteHelper::CheckForProductInCart(3))
                                        <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                    @else
                                        <a class="btn btn-primary btn-block" href="{{route('services.order.domain', array(3))}}">Buy Now</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 col-md-6 col-lg-6 secondary">
                <div class="card border border-secondary p-1">
                    <div class="ribbon-price">
                        <span class="badge bg-secondary text-white">25%</span>
                    </div>
                    <div class="princing-item">
                        <div class="pricing-divider text-center pt-5">
                            <h2 class="text-secondary">{{\App\Helpers\SiteHelper::GetPackageTitles(4)}}</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#05C3FB" d="M21.6,2.7c0-0.2-0.2-0.3-0.4-0.4c-3.8-1-7.9,0.3-10.4,3.3L9.5,7.1L6.8,6.4C5.7,6,4.6,6.5,4.1,7.5L2,11.2c0,0,0,0.1-0.1,0.1c-0.1,0.3,0.1,0.5,0.4,0.6l3.4,0.7c-0.3,0.9-0.6,1.8-0.7,2.7c0,0.2,0,0.3,0.1,0.4l3,2.9c0.1,0.1,0.2,0.1,0.4,0.1c0,0,0,0,0,0c0.9-0.1,1.9-0.3,2.8-0.6l0.7,3.3c0,0.2,0.3,0.4,0.5,0.4c0.1,0,0.2,0,0.2-0.1l3.7-2.1c0.9-0.5,1.3-1.6,1.1-2.6l-0.7-2.9l1.4-1.3C21.3,10.5,22.6,6.5,21.6,2.7z M3.2,11.1L4.9,8c0.3-0.6,0.9-0.8,1.5-0.6l2.3,0.6L7.7,9.2c-0.6,0.8-1.2,1.6-1.6,2.5L3.2,11.1z M16,19l-3.1,1.8l-0.6-2.9c0.9-0.4,1.7-1,2.5-1.6l1.3-1.2l0.6,2.3C16.7,18,16.5,18.7,16,19z M17.6,12.3l-3.5,3.2c-1.5,1.3-3.4,2.1-5.4,2.3l-2.6-2.6c0.3-2,1.1-3.9,2.4-5.4L10.1,8c0,0,0.1-0.1,0.1-0.1l1.4-1.6c2.2-2.6,5.8-3.8,9.1-3.1C21.4,6.6,20.3,10.1,17.6,12.3z M16.4,5.6c-1.1,0-1.9,0.9-1.9,1.9s0.9,1.9,1.9,1.9c1.1,0,1.9-0.9,1.9-1.9C18.3,6.5,17.5,5.6,16.4,5.6z M16.4,8.5c-0.5,0-0.9-0.4-0.9-0.9c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9C17.3,8.1,16.9,8.5,16.4,8.5z"></path>
                                </svg>
                            </span>
                            <h4 class="display-5 text-secondary fw-bold my-3 pt-5"><span class="h3"> Starting </span> ${{\App\Helpers\SiteHelper::GetPackagePrices(4)}}
                                <span class="h5">/month</span></h4>
                        </div>
                        <div class=" br-be-0 br-bs-0 bg-white mt-0 shadow">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                            class="fa fa-check text-primary p-2 fw-bold"></i><b>100GB</b> SSD Storage
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Unlimtied</b>
                                    Bandwidth
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>Email
                                        Accounts</b>&nbsp;&nbsp;<i class="fa-solid fa-infinity fw-bold text-white"></i>
                                </li>
                                <li class="list-group-item"><i class="fa fa-check text-primary p-2 fw-bold"></i><b>
                                        24/7</b> support
                                </li>
                                <li class="list-group-item border-bottom-0"><i
                                            class="fa fa-checktext-primary p-2 fw-bold"></i><b>Help center access</b>
                                </li>
                            </ul>
                            <div class="card-footer text-center p-5">
                                @if(!\App\Helpers\SiteHelper::checkForPaymentDetails())
                                    <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                @else
                                    @if(\App\Helpers\SiteHelper::CheckForProductInCart(4))
                                        <a class="btn btn-primary btn-block" href="javascript:void(0);" style="cursor: not-allowed;">Buy Now</a>
                                    @else
                                        <a class="btn btn-primary btn-block" href="{{route('services.order.domain', array(4))}}">Buy Now</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection