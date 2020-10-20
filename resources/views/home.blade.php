@extends('layouts.layout')

@section('title',$pageTitle)
@section('theme',$theme)

@section('content')
<div class="main-container">
        <div class="container">
            <div class="row">
                <h1>Home Page</h1>
                <p>{{ $pageData }}</p>
            </div>
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