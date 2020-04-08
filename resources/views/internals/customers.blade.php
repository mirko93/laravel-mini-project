@extends('layout')

@section('title', 'Customers List')

@section('content')
    <div class="row">
        <div class="col-10">
            <h1>Customers List</h1>
        </div>

        <div class="col-10">
            <form action="customers" method="POST">

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    {{ $errors->first('name') }}
                </div>
        
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    {{ $errors->first('email') }}
                </div>

                <div class="form-group">
                    <label for="active">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
        
                <button type="submit" class="btn btn-success">Add</button>
        
                @csrf
            </form>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-6">
            <h2>Active Customers</h2>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>
                        {{ $activeCustomer->name }}
                        <span class="text-muted"> ({{ $activeCustomer->email }})</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-6">
            <h2>Inactive Customers</h2>
            <ul>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li>
                        {{ $inactiveCustomer->name }}
                        <span class="text-muted"> ({{ $inactiveCustomer->email }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection