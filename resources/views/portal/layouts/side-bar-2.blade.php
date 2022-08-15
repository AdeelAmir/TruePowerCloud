<div class="col-lg-6 col-xl-3">
    <div class="card">
        <div class="card-body">
            <div class="list-group list-group-transparent mb-0 file-manager file-manager-border">
                <h4>General</h4>
                <div>
                    <a href="{{route('account') }}" class="list-group-item  d-flex align-items-center px-0 border-top">
                        <i class="fa-solid fa-user text-success p-2"></i>&nbspAccount
                    </a>
                </div>
                <div>
                    <a href="{{route('invoices.manage') }}" class="list-group-item  d-flex align-items-center px-0">
                        <i class="fa-solid fa-file-invoice-dollar me-2 text-secondary p-2"></i>&nbspInvoices
                    </a>
                </div>
                <div>
                    <a href="{{route('account.security.change-password') }}"  class="list-group-item  d-flex align-items-center px-0">
                        <i class="fa-solid fa-key  text-primary p-2"></i> &nbspChange Password
                    </a>
                </div>
                <div>
                    <a href="{{route('account.payment-methods') }}" class="list-group-item  d-flex align-items-center px-0">
                    <i class="fa-solid fa-credit-card  text-warning p-2"></i>&nbspPayment Methods
                    </a>
                </div>
                <!--<div>
                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                        <i class="fa-solid fa-lock text-pink p-2"></i>&nbsp Security
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>