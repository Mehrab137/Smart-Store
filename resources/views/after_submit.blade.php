@extends('layout')

@section('content')

<h2 style="padding-top: 10%; text-align:center">Thankyou for filling out the form</h2><br>
<p style="font-size: 20px; text-align:center">The recorded data can be viewed <a href="{{ route('view.smart.list') }}">here</a></p><br>

<p style="font-size: 40px; text-align:center">If you want to add more smart things, <br> click <a href="{{ route('add.smart.view') }}">here</a></p>

@endsection