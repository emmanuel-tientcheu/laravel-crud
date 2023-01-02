@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>whoops</strong>there some problems withs yours input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 cols-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: </strong>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}">
            </div>
        </div>
        <div class="col-xs-12 cols-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details: </strong>
                <textarea class="form-control" name="detail" id="" cols="30" rows="10"  value="" >{{ $product->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 cols-sm-12 col-md-12" >
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection