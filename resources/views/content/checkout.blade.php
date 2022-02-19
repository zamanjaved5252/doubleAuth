@extends('layout.layout')


@section('content')

    {{--checkout--}}
    <div>
    <div class="container" style="background: whitesmoke">
        <div class="py-2 text-center">
            <div style="color: #ff5e14;font-size:0px;">
                <center>  <img src="{{asset('logo/noname.png')}}" style="width: 80px;opacity: 50%" alt=""></center>
            </div><br>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill"> {{ Cart::getTotalQuantity()}}</span>
                </h4>
                <ul class="list-group mb-3">
                        @foreach ($cartItems as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $item->name }}</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">{{ $item->quantity  * $item->price}}</span>
                    </li>
                        @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                                    <span>Total (USD)</span>
                                                    <strong>${{ Cart::getTotal() }}</strong>
                                                </li>
                            {{--                    <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                        <div>--}}
{{--                            <h6 class="my-0">Second product</h6>--}}
{{--                            <small class="text-muted">Brief description</small>--}}
{{--                        </div>--}}
{{--                        <span class="text-muted">$8</span>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                        <div>--}}
{{--                            <h6 class="my-0">Third item</h6>--}}
{{--                            <small class="text-muted">Brief description</small>--}}
{{--                        </div>--}}
{{--                        <span class="text-muted">$5</span>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item d-flex justify-content-between bg-light">--}}
{{--                        <div class="text-success">--}}
{{--                            <h6 class="my-0">Promo code</h6>--}}
{{--                            <small>EXAMPLECODE</small>--}}
{{--                        </div>--}}
{{--                        <span class="text-success">-$5</span>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item d-flex justify-content-between">--}}
{{--                        <span>Total (USD)</span>--}}
{{--                        <strong>$20</strong>--}}
{{--                    </li>--}}
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" action="{{url('checkoutstore')}}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control"id="fname" name="name" placeholder="name" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">email</label>
                            <input type="email" class="form-control"id="email" name="email" placeholder="email" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">address</label>
                            <input type="text" class="form-control" id="adr" name="address" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">city</label>
                            <input type="text" class="form-control"  id="city" name="city" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">state</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">phone</label>
                            <input type="text" class="form-control"  id="cname" name="phone" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">cnumber</label>
                            <input type="text" class="form-control" id="ccnum" name="cnumber" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>





{{--                    <div class="mb-3">--}}
{{--                        <label for="username">Username</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-prepend">--}}
{{--                                <span class="input-group-text">@</span>--}}
{{--                            </div>--}}
{{--                            <input type="text" class="form-control" id="username" placeholder="Username" required>--}}
{{--                            <div class="invalid-feedback" style="width: 100%;">--}}
{{--                                Your username is required.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="email">Email <span class="text-muted">(Optional)</span></label>--}}
{{--                        <input type="email" class="form-control" id="email" placeholder="you@example.com">--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter a valid email address for shipping updates.--}}
{{--                        </div>--}}
{{--                    </div>--}}

    {{--                    <div class="mb-3">--}}
    {{--                        <label for="address">Address</label>--}}
    {{--                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>--}}
    {{--                        <div class="invalid-feedback">--}}
    {{--                            Please enter your shipping address.--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="mb-3">--}}
    {{--                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>--}}
    {{--                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">--}}
    {{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-5 mb-3">--}}
{{--                            <label for="country">Country</label>--}}
{{--                            <input type="text" class="custom-select d-block w-100" id="country" required/>--}}

{{--                        </div>--}}
{{--                        <div class="col-md-4 mb-3">--}}
{{--                            <label for="state">State</label>--}}
{{--                            <select class="custom-select d-block w-100" id="state" required>--}}
{{--                                <option value="">Choose...</option>--}}
{{--                                <option>California</option>--}}
{{--                            </select>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Please provide a valid state.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3 mb-3">--}}
{{--                            <label for="zip">Zip</label>--}}
{{--                            <input type="text" class="form-control" id="zip" placeholder="" required>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Zip code required.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                  {{--  <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    --}}


{{--                    <h4 class="mb-3">Payment</h4>--}}

{{--                    <div class="d-block my-3">--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>--}}
{{--                            <label class="custom-control-label" for="credit">Credit card</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>--}}
{{--                            <label class="custom-control-label" for="debit">Debit card</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>--}}
{{--                            <label class="custom-control-label" for="paypal">PayPal</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="cc-name">Name on card</label>--}}
{{--                            <input type="text" class="form-control" id="cc-name" placeholder="" required>--}}
{{--                            <small class="text-muted">Full name as displayed on card</small>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Name on card is required--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="cc-number">Credit card number</label>--}}
{{--                            <input type="text" class="form-control" id="cc-number" placeholder="" required>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Credit card number is required--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration m</label>
                            <input type="text" class="form-control" id="expmonth" name="ExpiryMonth" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">Expiration Y</label>
                            <input type="text" class="form-control"  id="expyear" name="ExpiryYear" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cvc" name="cvc"  placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">price</label>
                            <input type="show" name="totalamount" value="{{ Cart::getTotal() }}">                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>

                     </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>

        {{--    <footer class="my-5 pt-5 text-muted text-center text-small">--}}
        {{--        <p class="mb-1">&copy; 2017-2019 Company Name</p>--}}
        {{--        <ul class="list-inline">--}}
        {{--            <li class="list-inline-item"><a href="#">Privacy</a></li>--}}
        {{--            <li class="list-inline-item"><a href="#">Terms</a></li>--}}
        {{--            <li class="list-inline-item"><a href="#">Support</a></li>--}}
        {{--        </ul>--}}
        {{--    </footer>--}}
    </div>


    </div>{{--end checkout--}}
@endsection
