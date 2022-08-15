<script type="text/javascript" rel="script">
    $(document).ready(function () {
        LoadCartPageHtml();
        ShowCartCount();
    });

    function AddToCart(e, Package) {
        let DomainType = $("input[name='domainNameConnection']:checked").val();
        let Domain = $("#domainName").val();
        if(Domain !== '') {
            $(e).attr('disabled', true);
            $.ajax({
                type: "post",
                url: "{{ route('cart.items.add') }}",
                data: { Package: Package, DomainType : DomainType, Domain : Domain}
            }).done(function (data) {
                window.location.href = '{{route('services.hosting.cart')}}';
            });
        } else {
            alert('Please specify domain name');
        }
    }

    function RemoveFromCart(Package) {
        if(confirm("Sure you want to remove package from cart?")){
            $.ajax({
                type: "post",
                url: "{{route('cart.items.remove')}}",
                data: { Package : Package }
            }).done(function (data) {
                location.reload();
            });
        }
    }

    function LoadCartPageHtml() {
        let HtmlObject = $("#cartItemsTableBody");
        if(HtmlObject.length > 0) {
            $.ajax({
                type: "post",
                url: "{{route('cart.page.html')}}",
                data: { }
            }).done(function (data) {
                data = JSON.parse(data);
                HtmlObject.html(data.tableBody);
                $("#cartSubTotalDisplay").html('$' + data.subTotal);
                $("#cartTaxDisplay").html('+ $' + data.tax);
                $("#cartTotalDisplay").html('$' + data.total);
            });
        }
    }

    function ShowCartCount() {
        $.ajax({
            type: "post",
            url: "{{route('cart.items.count')}}",
            data: { }
        }).done(function (data) {
            if(parseInt(data) !== 0){
                $("#cartIconHeader").html('' +
                    '<a class="nav-link icon" href="{{route('services.hosting.cart')}}">' +
                    '   <i class="fa-solid fa-cart-shopping fa-4x"></i><span class=" pulse"></span>' +
                    '</a>');
            } else {
                $("#cartIconHeader").html('' +
                    '<a class="nav-link icon" href="{{route('services.hosting.cart')}}">' +
                    '   <i class="fa-solid fa-cart-shopping fa-4x"></i>' +
                    '</a>');
            }
        });
    }
</script>