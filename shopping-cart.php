<?php
include ('includes/header.php');
?>
        <!-- Banner Area Starts -->
        <section class="banner-area">
            <div class="banner-overlay">
                <div class="banner-text text-center">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <div class="col-xs-12">
                                <!-- Title Starts -->
                                <h2 class="title-head">سبد <span>خرید</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="index.php"> خانه</a></li>
                                    <li>سبد خرید</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Shopping Cart Starts -->
        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
					<!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>محصول</th>
                                    <th>Price</th>
                                    <th>تعداد</th>
                                    <th>جمع</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><a href="#" class="fa fa-trash icon-delete-product"></a></td>
                                    <td class="text-right"><h6 class="product">0.179 BTC</h6></td>
                                    <td class="text-right"><span class="price">589000</span></td>
                                    <td class="text-right">
										<div class="quantity">	
											<input type="button" value="&#8249;" class="qtyminus" data-field="quantity" />
											<input type="text" name="quantity" value="1" class="qty" />
											<input type="button" value="&#8250;" class="qtyplus" data-field="quantity" />
										</div>
									</td>
									<td class="text-right"><span class="price">589000</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
					<!-- Purchased Products Ends -->
					<!-- Coupon Input Starts -->
                    <div class="col-xs-12 col-sm-7 text-center">
                        <form>
                            <div>
                                <input type="text" placeholder="کد کوپن" class="form-control">
                                <button type="submit" class="btn btn-primary btn-coupon">کوپن</button>
                            </div>
                        </form>
                    </div>
					<!-- Coupon Input Ends -->
					<!-- Update Cart Starts -->
                    <div class="col-xs-12 col-sm-5 text-center"><a href="#" class="btn btn-primary pull-right btn-update-cart">به روز رسانی سبد خرید</a></div>
					<!-- Update Cart Ends -->
					<!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <h4 class="title-totals">کل سبد خرید</h4>
                        <table class="table cart-total">
                            <colgroup>
                                <col class="col-xs-6">
                                <col class="col-xs-6">
                            </colgroup>
                            <thead>
                                <tr class="section-border">
                                    <th>قیمت بدون مالیات</th>
                                    <th class="text-right"><span class="price">589000</span></th>
                                </tr>
                                <tr>
                                    <th>جمع</th>
                                    <th class="total text-right"><span class="price">607000</span></th>
                                </tr>
                            </thead>
                        </table>
                        <div><a href="shopping-checkout.php" class="btn btn-primary pull-right btn-proceed">ادامه پرداخت</a></div>
                    </div>
					<!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
		<!-- Section Shopping Cart Ends -->
<?php
include ('includes/footers.php');
?>