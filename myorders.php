<!DOCTYPE html>
<html>

<head>
    <title>My Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <script>
        $(function() {
            $("#header").load("header.html", function() {
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
    <link rel="stylesheet" type="text/css" href="css/myorders.css">

    <section id="order-detail-popup" class="d-none">
        <i class="fa fa-times fa-2x"></i>
        <div class="order-detail-div">
            <div>
                <h2 class="text-center uppercase bold">Order Details</h2>
                <hr>
            </div>
            <div>
                <h3>Cuisines</h3>
                <ul class="products">
                    <li>2 Red Velvet</li>
                </ul>
                <hr>
            </div>
            <div>
                <h3>Topping</h3>
                <p id="toppingNameDetail">None</p>
                <hr>
            </div>
            <div>
                <h3>Order Date & Time</h3>
                <p id="order-date-time">12/09/2019 23:14:15</p>
                <hr>
            </div>
            <div>
                <h3>Delievery Address</h3>
                <p class="address-delievery">House#11 Street 35 I-9/4 Islamabad</p>
                <hr>
            </div>
            <div>
                <h3>Delievered By (Driver)</h3>
                <p id="driverNameDelievery">Ali</p>
            </div>
            <hr>
            <div>
                <h3>Total Amount</h3>
                <p id="total-amount-detail">PKR 1800</p>
            </div>
        </div>
    </section>

    <section id="order-rating" class="d-none">
        <i class="fa fa-times fa-2x"></i>
        <div class="rating-div">
            <div>
                <h3>Rating:
                    <div class="rate-box"><span class="fa fa-star b1"></span>
                        <span class="fa fa-star b2"></span>
                        <span class="fa fa-star b3"></span>
                        <span class="fa fa-star b4"></span>
                        <span class="fa fa-star b5"></span></div>
                </h3>
            </div>

            <div>
                <h3>Comment</h3>
                <textarea name="comment" id="feedback" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary mt-3">Submit</button>
        </div>
    </section>

    <div class="container py-5">
        <h3 class="text-center mb-5">My Orders</h3>
        <ul class="cust-orders">
            <li><span class="rate"><i class="fa fa-star"></i></span>2 Red Velvet<span class="total-amount">PKR 1800</span>
                <hr>
            </li>
            <li><span class="rate"><i class="fa fa-star"></i></span>2 Nutella Stuffed<span class="total-amount">PKR 170</span>
                <hr>
            </li>
        </ul>
    </div>

    <script>
        $('.fa-times').click(function() {
            $('#order-rating').addClass('d-none');
            $('#order-detail-popup').addClass('d-none');
        });
        $('.cust-orders').on('click', '.rate', function(event) {
            $('#order-rating').removeClass('d-none');
            event.stopPropagation();
        });
        $('.cust-orders').on('click', 'li', function() {
            $('#order-detail-popup').removeClass('d-none');
        });
    </script>

</body>

</html>