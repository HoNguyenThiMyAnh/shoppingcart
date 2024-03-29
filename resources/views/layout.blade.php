<!DOCTYPE html>
<html >
<head>
    <title>Laravel 9 Shopping Cart add to cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
<div class="col-lg-12 col-sm-12 col-12">
    <div class="dropdown">
        <a href="{{route('carts')}}" type="button" class="btn btn-primary" data-toggle="dropdown">
         <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart'))  }}</span> 
        </a>   
        
        <div class="dropdown-menu">
        <div class="row total-header-section">
            @php $total = 0 @endphp
            @foreach ((array ) session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
            @endforeach
            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                <p>Total: <span class="text-info">$ {{ $total }}</span> </p>
               </div>
            </div>   
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                        <a href="" class="btn btn-primary btn-block">View all </a> 
                    </div>
                </div>
             </div>    
        </div>
    </div>
</div>
</div>


<br/>
    <div class="container">

        @if(session('success'))
        <div class="alert alert-succes">  
        {{ session('success') }}    
        </div>
        @endif

        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>