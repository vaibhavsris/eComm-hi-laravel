@extends('master')
@section('content')  
{{-- <div class="col-lg-3"></div> --}}
<div class="container-fluid " style="height: 490px; padding-top:50px;">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Searched Products</h4>
            <div class="">
                @foreach ($products as $item)
                <div class="searched-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img class='trending-img' src="{{ $item['gallery'] }}">
                        <div class="" >
                            <h2 style="text-shadow: -2px 1px 13px rgba(9,133,206,0.74);color:black;">{{ $item['name'] }}</h2>            
                            <h5 style="text-shadow: -2px 1px 13px rgba(9,133,206,0.74);color:black;">{{ $item['description'] }}</h5>            
                        </div>
                    </a>
                </div>    
                @endforeach
            </div> 
        </div> 
    </div>  
</div> 
@endsection