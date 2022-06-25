@extends('layout.app')

@section('title')
    DC | homepage
@endsection

@section('main_content')
    <section class="section-bg">
        <div class="container_uno">
            <div class="card">
                <div class="comics-card">
                @foreach ($comics_array as $comics)
                    <img src="{{ $comics['thumb'] }}" alt="">
                    <h4> {{  $comics['title']  }} </h4>
                @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection