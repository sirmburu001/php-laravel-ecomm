@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>${{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 15</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>${{ $total + 15 }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/action_page.php">
                <div class="form-group">
                  <textarea type="email" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <p>
                        <label for="pwd">Payment Method</label> <br> <br>
                        <input type="radio" name="payment"><span> Online payment</span> <br> <br>
                        <input type="radio" name="payment"><span> EMI payment</span> <br> <br>
                        <input type="radio" name="payment"><span> Payment on delivery</span> <br> <br>
                    </p>

                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>

</div>
@endsection
