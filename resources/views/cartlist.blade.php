@extends('master')
@section('content')  
{{-- <div class="col-lg-3"></div> --}}
<div class="container-fluid " style="height: 490px; padding-top:50px;">
    
    <div class="col-sm-9">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
            <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
            <div class="">
                @foreach ($products as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class='trending-img' src="{{ $item->gallery }}">
                            
                        </a>
                    </div>
                    <div class="col-sm-3">
                        
                            <div class="" >
                                <h2 style="text-shadow: -2px 1px 13px rgba(9,133,206,0.74);color:black;">{{ $item->name }}</h2>            
                                <h5 style="text-shadow: -2px 1px 13px rgba(9,133,206,0.74);color:black;">{{ $item->description }}</h5>            
                            </div>
                        
                    </div>
                    <div class="col-sm-3">        
                        <a href="removecart/{{ $item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                    </div>
                </div>    
                @endforeach
                <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
            </div> 
        </div> 
    </div>  
</div> 
@endsection