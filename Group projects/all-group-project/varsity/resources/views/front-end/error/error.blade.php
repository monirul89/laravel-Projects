@extends('front-end.master')

@section('title')
    404 Error
@endsection

@section('body')
    <section id="errorpage">
        <div class="container">
            <div class="error_page_content">
                <h1>404</h1>
                <h2>Sorry :(</h2>
                <h3>This page doesn't exist.</h3>
                <p class="wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">Please, continue to our <a href="{{ route('/') }}">Home page</a></p>
            </div>
        </div>
    </section>
@endsection