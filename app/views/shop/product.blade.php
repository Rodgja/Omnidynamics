@extends('layout')

@section('content')



<h1>{{$productName->name}}</h1>

<img href="<?php echo $productName->image ?>" alt="Strooder">
<p>{{$productName->description}}</p>
<p>Price: {{$productName->price}}</p>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M94DSZ3XLJU4J">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>



@stop