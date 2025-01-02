@extends('user.layout')
@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="border rounded px-3 py-3 bg-white shadow" style="width: 100%; max-width: 400px;">
        <h1 class="text-center mb-4">Login</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{ old('password') }}" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Masuk</button>
            </div>
        </form>
    </div>
</div>

@endsection

@php
    $hideNavbar = true;
    $hideFooter = true;
@endphp
