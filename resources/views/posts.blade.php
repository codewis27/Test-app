@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post["slug"] }}"></a>
            </h2>
            <h5></h5>
            <p></p>
        </article>
    @endforeach
@endsection