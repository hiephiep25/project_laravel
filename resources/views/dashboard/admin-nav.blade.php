<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-right">
                    <a href="./admin" class="login-panel">
                        <i class="fa fa-user"></i>
                        {{Auth::user()->name}} - Logout
                    </a>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="col-md-12" style="margin-bottom: 30px">
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            You are logged in!
            <p></p>
            <p><a href="./admin/user">User's account</a></p>
            <p><a href="./admin/category">Category</a></p>
            <p><a href="./admin/product">Product</a></p>
            <p><a href="./admin/order">Order</a></p>
        </div>
    </div>
</div>