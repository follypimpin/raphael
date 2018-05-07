@extends('layouts.mainlayout')
@section('title','Contact')
@section('content')
    <form>
        <div>
            <h5>Submit a new Ticket</h5>
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
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Title">
            <small id="title" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" aria-label="With textarea" id="content"></textarea>
            <small id="content" class="form-text text-muted">Feel free to ask us any question.</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-warning">Cancel</button>
    </form>
@endsection