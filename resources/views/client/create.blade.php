@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Client</div>
                    <div class="card-body">
                        <form action="/clients/new" method="POST" class="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="client_name">Client Name</label>
                                <input class="form-control" type="text" name="client_name">
                            </div>
                            <div class="form-group">
                                <label for="client_status">Status</label>
                                <select class="form-control" id="client_status" name="client_status">
                                    <option value=""></option>
                                    <option value="pending">Pending</option>
                                    <option value="active">Active</option>
                                    <option value="deactive">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Address</label>
                                <input class="form-control" type="text" name="address">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" type="text" name="city">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" type="text" name="state">
                            </div>
                            <div class="form-group">
                                <label for="postal_code">Zip Code</label>
                                <input class="form-control" type="text" name="postal_code">
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea class="form-control" name="notes" id="notes" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
