@extends('Front.main')
@section('content')
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th class="p-name">Product Name</th>
                            <th>Price</th>
                            <th></th>
                            <th>Total</th>
                            <th><i class="ti-close"></i></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="cart-pic first-row"><img src="#" alt=""></td>
                            <td class="cart-title first-row">
                                <h5>#</h5>
                            </td>
                            <td class="p-price first-row" id="price">$</td>
                            <td class="qua-col first-row">

                            </td>

                            <td class="total-price first-row" id="result">$</td>
                            <td class="close-td first-row"><i class="ti-close"></i></td>
                        </tr>


                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="#" class="primary-btn continue-shop">Continue shopping</a>

                        </div>

                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>$240.00</span></li>
                                <li class="cart-total">Total <span>$240.00</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
