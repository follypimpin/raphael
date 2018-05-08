@extends('layouts.mainlayout')
@section('title','Log in')
@section('content')

    <form>
        <div>
            <h5>Login </h5>
        </div>
        @if (isset($errors)&& $errors->any())
            <div class="invalid-feedback">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="title">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email address">

        </div>
        <div class="form-group">
            <label for="content">Password</label>
            <input type="password" class="form-control" id="password">

        </div>

        <button type="submit" class="btn btn-primary">Sign In</button>

    </form>
@endsection