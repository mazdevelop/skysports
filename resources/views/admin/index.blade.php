@extends('layouts.admin')
@section('content')
            <div class="grid grid-rows-4 md:grid-rows-2  grid-flow-col gap-4">
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                total order
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    6578
                                </div>
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                conversion rate
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    30.5%
                                </div>
                                <i class='bx bx-chat'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                daily visitors
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    690
                                </div>
                                <i class='bx bx-user'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                total profit
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    $9,780
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-2 md:grid-rows-1  md:grid-cols-2 grid-cols-1 gap-4 mt-3">
                <div class="w-full">
                    <!-- TOP PRODUCT -->
                    <div class="box f-height">
                        <div class="box-header">
                            top product
                        </div>
                        <div class="box-body">
                            <ul class="product-list">
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="https://images.unsplash.com/photo-1625320014712-cc333e4e93a5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                            alt="">
                                        <div class="item-name">
                                            <div class="product-name">Jacket</div>
                                            <div class="text-second">Cloths</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$5.930</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="https://images.unsplash.com/photo-1625320014712-cc333e4e93a5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                            alt="">
                                        <div class="item-name">
                                            <div class="product-name">Jacket</div>
                                            <div class="text-second">Cloths</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$5.930</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="https://images.unsplash.com/photo-1625320014712-cc333e4e93a5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                            alt="">
                                        <div class="item-name">
                                            <div class="product-name">Jacket</div>
                                            <div class="text-second">Cloths</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$5.930</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="https://images.unsplash.com/photo-1625320014712-cc333e4e93a5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                            alt="">
                                        <div class="item-name">
                                            <div class="product-name">Jacket</div>
                                            <div class="text-second">Cloths</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$5.930</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--END TOP PRODUCT -->
                </div>
                <div class="w-full">
                        <!-- CATEGORY CHAT -->
                        <div class="box f-height">
                            <div class="box-body">
                                <div id="category-chart"></div>
                            </div>
                        </div>
                        <!-- END CATEGORY CHAT -->
                </div>
            </div>
                <div class="row flex mt-3">
                    <div class="w-full">
                        <!-- CUSTOMER CHAT -->
                        <div class="box f-height">
                            <div class="box-header">
                                customer
                            </div>
                            <div class="box-body">
                                <div id="customer-chart"></div>
                            </div>
                        </div>
                        <!-- END CUSTOMER CHAT -->
                    </div>
                </div>
                <div class="row flex mt-3">
                    <div class="w-full">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header">Recent order</div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Customer</td>
                                        <td>Date</td>
                                        <td>Order status</td>
                                        <td>Payment status</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="https://images.unsplash.com/photo-1606787364406-a3cdf06c6d0c?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                                <span>Maz dev</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-ready">Ready</span>
                                        </td>
                                        <td>
                                            <span class="payment-status payment-pending">
                                                <div class="dot"></div>
                                                <span>Pending</span>
                                            </span>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="https://images.unsplash.com/photo-1606787364406-a3cdf06c6d0c?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                                <span>Maz dev</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">Shipped</span>
                                        </td>
                                        <td>
                                            <span class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Paid</span>
                                            </span>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="https://images.unsplash.com/photo-1606787364406-a3cdf06c6d0c?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                                <span>Maz dev</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-ready">Ready</span>
                                        </td>
                                        <td>
                                            <span class="payment-status payment-pending">
                                                <div class="dot"></div>
                                                <span>Pending</span>
                                            </span>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="https://images.unsplash.com/photo-1606787364406-a3cdf06c6d0c?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                                <span>Maz dev</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">Shipped</span>
                                        </td>
                                        <td>
                                            <span class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Paid</span>
                                            </span>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END ORDERS TABLE -->
                </div>

            </div>
@endsection