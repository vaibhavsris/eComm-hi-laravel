@extends('master')
@section('content')  
{{-- <div class="col-lg-3"></div> --}}
<div class="container-fluid " style="height: 490px; padding-top:50px;">
    
    <div class="col-sm-6">
        <table class="table table-striped">            
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{ $total }} rupees</td>                
              </tr>
              <tr>
                <td>Tax</td>                
                <td>0 rupees</td>
              </tr>
              <tr>
                <td>Delivery charges</td>
                <td>100 rupees</td>                
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{ $total + 100}} rupees</td>                
              </tr>
            </tbody>
          </table> 

          <form method="POST" action="orderplace">
            @csrf
            <div class="form-group">              
              <textarea class="form-control" placeholder="Address" name="address"></textarea>
            </div>
            <div class="form-group">
              <label for="">Payment Method</label>
              <p>
                <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
                <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br><br>
                <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span>
              </p>
            </div>
            
            <button type="submit" class="btn btn-default">Order Now</button>
          </form>
    </div>  
</div> 
@endsection