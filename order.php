<!DOCTYPE html>
<html>

<head>
    <title>Bellaria - Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <script>
        $(function () {
            $("#header").load("header.html", function () {
                let navBar = document.getElementById("mainNav");
                let headerDiv = document.getElementById("header");
                let orderTab = document.getElementById("order");

                headerDiv.style.height = navBar.getBoundingClientRect().height + "px";

                orderTab.classList.add("active");
            });
        });
    </script>

</head>

<body id="page-top">
    <div id="header"></div>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/order.css">

    <section class="pop-up-plus d-none">
        <i class="fa fa-times fa-2x"></i>
        <div class="container text-center pop-up-details pt-5">
            <h3 class="d-flex"><span id="product-name">Chocolate Mousse</span><span id="product-price">PKR 990</span>
            </h3> <br>
            <hr class="line">
            <h5 class="weight-cake"><span class="mr-5 pr-5">Pounds: </span><span class="ml-5 pl-5"></span><i
                    class="fa fa-minus mr-3" id="pound-d"></i><span id="pound-cake">1</span><i id="pound-i"
                    class="fa fa-plus ml-3"></i></span>
            </h5>
            <hr>
            <h5 class="text-left mb-4">Choose toppings (if any)</h5>
            <ul class="toppings">
                <li><input type="checkbox">Sprinkles<span>+ PRK 10</span></li>
                <li><input type="checkbox">Choco Chips<span>+ PRK 10</span></li>
                <li><input type="checkbox">Choco Syrup<span>+ PRK 10</span></li>
                <li><input type="checkbox">Peanuts<span>+ PRK 10</span></li>
            </ul>
            <hr>
            <h5 class="text-left">Special Instructions (if any)</h5>
            <textarea class="mt-2 mb-5 p-3" rows="4" cols="68" placeholder="E.g No butter"></textarea> <br>
            <div class="row">
                <div class="col-3 d-flex"><i class="fa fa-minus" id="qty-d"></i><span id="qty">1</span><i
                        class="fa fa-plus" id="qty-i"></i></div>
                <div class="col-9"><button class="btn btn-primary">add to cart</button></div>
            </div>
        </div>
    </section>

    <section class="order-body">
        <div class="row">
            <div class="col-8">
                <ul class="row upper-header d-flex justify-content-around">
                    <li class="col-3 category category-active">
                        Cakes
                    </li>
                    <li class="col-3 category">
                        Cupcakes
                    </li>
                    <li class="col-3 category">
                        Cookies
                    </li>
                    <li class="col-3 category">
                        Donuts
                    </li>
                </ul>
            </div>
            <div class="col-4 cart pt-3">
                <h4 class="text-center">Your Order - Bellaria</h4> <br>
                <p class="text-justify text-center ">You haven't added anything to your cart yet! Start adding to your
                    cart
                </p> <br>
                <hr>
                <br>
                <div class="row ">
                    <div class="col-6 ">
                        Subtotal
                    </div>
                    <div class="col-6 d-flex flex-row-reverse ">
                        <span>PKR0.00</span>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6 ">
                        Delievery Fee
                    </div>
                    <div class="col-6 d-flex flex-row-reverse ">
                        <span>PKR0.00</span>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6 ">
                        Total
                    </div>
                    <div class="col-6 d-flex flex-row-reverse ">
                        <span>PKR0.00</span>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 ">
                        <button class="btn btn-primary checkout ">checkout</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h4 class="head text-center"><i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle"
                        aria-hidden="true"></i>Choose your cuisine<i class="fa fa-circle" aria-hidden="true"></i><i
                        class="fa fa-circle" aria-hidden="true"></i>
                </h4> <br>
                <hr class="line">
            </div>
        </div>


        <div class="row">
            <div class="col-8 ">
                <ul class="product-list">
                    <li>Chocolate Mousse<span>from PKR 990<i class="fa fa-plus"></i></span></li>
                    <hr>
                    <li>Chocolate Fudge<span>from PKR 880<i class="fa fa-plus"></i></span></li>
                    <hr>
                    <li>Oreo Cake<span>from PKR 890<i class="fa fa-plus"></i></span></li>
                    <hr>
                    <li>Kitkat Special<span>from PKR 750<i class="fa fa-plus"></i></span></li>
                    <hr>
                    <li>Red Velvet<span>from PKR 900<i class="fa fa-plus"></i></span></li>
                    <hr>
                </ul>
            </div>
        </div>


    </section>



    <script>
        $('.product-list').on("click", "li", function () {
            $('.pop-up-plus').removeClass('d-none');
            var str = $(this).html();
            $('#product-name').text(str.slice(0, str.indexOf('<')));
            $('#product-price').text(str.slice(str.indexOf('>') + 6, str.indexOf('<i')));
        });
        $('#qty-d').click(function () {
            var val = parseInt($('#qty').html());
            if (val > 1) {
                $('#qty').text(--val);
            }
        });
        $('#qty-i').click(function () {
            var val = parseInt($('#qty').html());
            $('#qty').text(++val);
        });
        $('#pound-d').click(function () {
            var val = parseInt($('#pound-cake').html());
            if (val > 1) {
                $('#pound-cake').text(--val);
            }
        });
        $('#pound-i').click(function () {
            var val = parseInt($('#pound-cake').html());
            $('#pound-cake').text(++val);
        });
        $('.fa-times').click(function () {
            $('.pop-up-plus').addClass('d-none');
        });
    </script>

</body>

</html>