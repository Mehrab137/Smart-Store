@extends('layout')
@section('content')

<h3 style="padding-top: 5%">PLEASE FILL OUT THE FORM BELOW</h3><br>

<form action="{{ route('add.smart.submit') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Device Type</label>
        <select class="form-select" name="type" aria-label="Default select example">
            <option selected>Select Device</option>
            <option value="Laptop">Lpatop</option>
            <option value="Mobile-Phone">Mobile</option>
          </select>
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Brand Name</label>
        <input type="text" name="brand" class="form-control">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Model Name</label>
        <input type="text" name="model" class="form-control"> 
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Color</label>
        <input type="text" name="color" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Avaibility</label>
        <input type="text" name="avaibility" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection