@extends('layout.app')

@section('title')
    DC | Comic Singolo
@endsection

@section('main_content')
    <section>
        <div class="back">
            {{-- @foreach($comics_array as $comics) --}}
                <div class="margin">
                    <div class=" image-title">
                         <img class="image" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    
        <div class="conetenuto margin">
            <div class="con-1">
                <h3 class="titolo">{{ $current_comic['title']}}</h3>
                <div class="flex">
                    <div class="price">
                       <div class="tx-price"> U.S Price: <span>{{ $current_comic['price']}}</span></div>
                       <div> AVAILABLE</div>
                    </div>

                    <div class="check">
                       <p>Check Availability</p>
                    </div>
                </div>
                <p>{{ $current_comic['description']}} </p>
                </div>
            <div class="con-2">
                <h6>ADVERTISMENT</h6>
                <img src="" alt="">
            </div>
        </div>
    </section>
 

    {{-- @foreach ($comics_array as $comics)
    <li class="card">
       <img src="{{ $comics['thumb'] }}" alt="">
       <h4> {{  $comics['title'] }} </h4>
    </li>
    @endforeach --}}
        
@endsection