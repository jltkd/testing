@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $client->client_name }}</div>
                    <div class="card-body">
                        <p>{{ $client->client_status }}</p>
                        <p>{{ $client->address }}</p>
                        <p>{{ $client->city }}</p>
                        <p>{{ $client->state }}</p>
                        <p>{{ $client->postal_code }}</p>
                        <p>{{ $client->notes }}</p>
                        <hr>
                        <h5>Contact Person</h5>
                        @foreach($client->contacts as $contact)
                            <div class="contact">
                                <p>{{ $contact->contact_first_name }} {{ $contact->contact_last_name }}</p>
                                <p><a href="mailto:{{ $contact->contact_email }}">{{ $contact->contact_email }}</a></p>
                                <p>{{ $contact->contact_phone }}</p>
                            </div>
                        @endforeach
                        <a href="/clients/edit/{{ $client->id }}" class="btn btn-primary">Edit</a>
                        <a href="/clients/delete/{{ $client->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
