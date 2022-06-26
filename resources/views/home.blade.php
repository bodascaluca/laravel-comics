@extends('layout.app')

@section('title')
    DC | homepage
@endsection

@section('main_content')
    <section class="section-bg">
        <div class="container">

            <div class="comics-list">

                <ul class="comics-card">
                 @foreach ($comics_array as $comics)
                 <li class="card">
                    <img src="{{ $comics['thumb'] }}" alt="">
                    <h4> {{  $comics['title'] }} </h4>
                 </li>
                 @endforeach
                </ul>

            </div>

            <div class="targhetta">
                <h3>CURRENT SERIES</h3>
            </div>

        </div>
    </section>
@endsection