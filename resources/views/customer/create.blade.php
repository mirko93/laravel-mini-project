@extends('layout')

@section('title', 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-10">
            <h1>Add New Customer</h1>
        </div>

        <div class="col-10">
            <form action="/customers" method="POST">

                @include('customer.form')
        
                <button type="submit" class="btn btn-success">Add</button>

            </form>
        </div>
    </div>

    <hr>

    

@endsection