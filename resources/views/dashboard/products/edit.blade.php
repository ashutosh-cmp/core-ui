@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit product</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus value="{{ $product->name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Cost</label>
                                <input class="form-control" type="text" placeholder="Cost" name="cost" required value="{{ $product->short_name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Category Id</label>
                                <input class="form-control" type="text" placeholder="Category Id" name="category_id" required value="{{ $product->status }}" />
                            </div>
                            <div class="form-group row">
                                <label>Product Id</label>
                                <input class="form-control" type="text" placeholder="Product Id" name="product_id" required value="{{ $product->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Status</label>
                                <input class="form-control" type="text" placeholder="Status" name="status" required value="{{ $product->code }}" />
                            </div>
                            <button class="btn btn-success" type="submit">Edit</button>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Return</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection