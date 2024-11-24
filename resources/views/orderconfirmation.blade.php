@extends('layout')
@section('title', 'Confirmation | BeBuy')
@section('content')
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed.</p>
            <form action="{{route('index.shop')}}" method="get">
              <button  class="btn btn-sm btn-primary" type="submit">Back to shop</button>
            </form>
           
          </div>
        </div>
      </div>
    </div>

@endsection
