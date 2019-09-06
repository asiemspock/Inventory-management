@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/products/create')}}">Add product</a>
            <?php echo "<br>" . "Product id:" .' '. $product->id . "<br>"; ?> 
            <?php echo "Product name:" .' '. $product->name . "<br>"; ?> 
            <?php echo "Product category:" .' '. $product->category . "<br>"; ?> 
            <?php echo "Product price:" .' '. $product->price . "<br>"; ?> 
        </div>
    </div>
</div>
@endsection