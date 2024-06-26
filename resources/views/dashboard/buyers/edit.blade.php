@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit buyer</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('buyers.update', $buyer->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus value="{{ $buyer->name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="Address" name="address" required value="{{ $buyer->short_name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Mobile Number</label>
                                <input class="form-control" type="text" placeholder="Mobile Number" name="mobile_number" required value="{{ $buyer->status }}" />
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder="Email" name="email" required value="{{ $buyer->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="Code" name="code" required value="{{ $buyer->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Status</label>
                                <input class="form-control" type="text" placeholder="Status" name="status" required value="{{ $buyer->code }}" />
                            </div>
                            <button class="btn btn-success" type="submit">Edit</button>
                            <a href="{{ route('buyers.index') }}" class="btn btn-primary">Return</a>
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