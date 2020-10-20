@extends('layouts.layout')
@section('theme',$theme)
@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
            <h1>Contact Page</h1>
            <p>{{ $pageData }}</p>
        </div>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>
@endsection

@section('footer')
<footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://www.facebook.com/jaba.bagdoshvili/" target="_blank">Jaba Bagdoshvili</a>
        </div>
        <!-- Copyright -->

    </footer>
@endsection