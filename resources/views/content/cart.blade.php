@extends('layout.layout')
@section('content')
    {{--cart--}}
    <style>
        .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control{
                width:20%;
                display: inline !important;
            }
            .actions .btn{
                width:36%;
                margin:1.5em 0;
            }

            .actions .btn-info{
                float:left;
            }
            .actions .btn-danger{
                float:right;
            }

            table#cart thead { display: none; }
            table#cart tbody td { display: block; padding: .6rem; min-width:290px;}
            table#cart tbody tr td:first-child {  ; color: #fff; }
            table#cart tbody td:before {
                content: attr(data-th); font-weight: bold;
                display: inline-block; width: 8rem;
            }



            table#cart tfoot td{display:block; }
            table#cart tfoot td .btn{display:block;}

        }
    </style>
    <div class="container mt-24">
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="">Image</th>
                <th style="">Name</th>
                <th style="">Quantity</th>
                <th style="">Price</th>
                <th style="">Subtotal</th>
                <th style="">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>
                        <div class="row">
                            <div class=" hidden-xs">
                                <img src="/image/{{ $item->attributes->image }}"
                                     style="width:120px"   alt="..." class="img-responsive"/>
                            </div>

                        </div>
                    </td>
                    <td>{{ $item->name }}   </td>
                    <td data-th="Quantity">
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                            <input type="number" name="quantity" value="{{ $item->quantity }}"
                                   class="form-control text-center w-14 " />
                            <button type="submit" class=" mt-1 text-white bg-blue-500 w-14 rounded">update</button>
                        </form>
                    </td>
                    <td data-th="Price">${{ $item->price }}</td>
                    <td data-th="Subtotal" class="text-center">

                        {{ $item->quantity  * $item->price}}
                    </td>
                    <td class="actions" data-th="">
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class=""><strong>Total: ${{ Cart::getTotal() }}</strong>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm w-150"><i class="fa fa-trash-o"></i> Remove All</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td><a href="{{route('products.list')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class=""><strong>Total: ${{ Cart::getTotal() }}</strong></td>
                <td><a href="{{url('checkout')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
