@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Contact</div>
                    <div class="card-body">
                        <form action="/contacts/new" method="POST" class="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="contact_first_name">Contact First Name</label>
                                <input class="form-control" type="text" name="contact_first_name">
                            </div>
                            <div class="form-group">
                                <label for="contact_last_name">Contact Last Name</label>
                                <input class="form-control" type="text" name="contact_last_name">
                            </div>
                            <div class="form-group">
                                <label for="client_status">Associated Client</label>
                                <select class="form-control" id="client_associate" name="client_associate">
                                    <option value=""></option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                    @endforeach
                                </select>
{{--                                {!! Form::select('clients', $clients, null, ['class' => 'form-control']) !!}--}}
                            </div>
                            <div class="form-group">
                                <label for="contact_email">Email Address</label>
                                <input class="form-control" type="email" name="contact_email">
                            </div>
                            <div class="form-group">
                                <label for="contact_phone">Phone Number</label>
                                <input class="form-control" type="tel" name="contact_phone">
                            </div>
                            <div class="form-group">
                                <label for="contact_notes">Notes</label>
                                <textarea class="form-control" name="contact_notes" id="contact_notes" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
