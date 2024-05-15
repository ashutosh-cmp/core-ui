@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit seller</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sellers.update', $seller->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Shop Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="shop_name" required autofocus value="{{ $seller->name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="Address" name="address" required value="{{ $seller->short_name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Contact Person</label>
                                <input class="form-control" type="text" placeholder="Contact Person" name="contact_person" required value="{{ $seller->status }}" />
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder="Email Id" name="email" required value="{{ $seller->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Contact Number</label>
                                <input class="form-control" type="text" placeholder="Contact Number" name="contact_number" required value="{{ $seller->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Shop Code</label>
                                <input class="form-control" type="text" placeholder="Shop Code" name="shop_code" required value="{{ $seller->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Status</label>
                                <input class="form-control" type="text" placeholder="Status" name="status" required value="{{ $seller->code }}" />
                            </div>
                            <button class="btn btn-success" type="submit">Edit</button>
                            <a href="{{ route('sellers.index') }}" class="btn btn-primary">Return</a>
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