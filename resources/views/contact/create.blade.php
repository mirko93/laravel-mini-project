@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact</h1>

    <form action="/contact" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            <div>{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection