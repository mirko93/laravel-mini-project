@extends('layout')

@section('title', 'Edit details for ' .$customer->name)

@section('content')
    <div class="row">
        <div class="col-10">
            <h1>Edit details for {{ $customer->name }}</h1>
        </div>

        <div class="col-10">
            <form action="/customers/{{ $customer->id }}" method="POST">
                @method('PATCH')

                @include('customer.form')
        
                <button type="submit" class="btn btn-success">Update</button>

            </form>
        </div>
    </div>

    <hr>

    

@endsection