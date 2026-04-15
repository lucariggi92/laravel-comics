@extends("layouts.master")

@php 
$cards = config("comics");
@endphp

@php 
$icons = config("iconsmenu")
@endphp

@section("hero banner")
<section class="bg-herobanner"></section>
@endsection

@section("grid card")

<section class="bg-black">
    <div class="text-light uppercase badge-luca">current series</div>
<div class="container">

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-4">
            
            @foreach($cards as $card)
            <div class="col">  
                <a href="/">   
                <x-card>
                    <x-slot:immagine>
                        
                        <img src="{{$card["thumb"]}}" alt="{{$card["title"]}}" class="imgSeries"></x-slot>
                    <x-slot:titolo>{{$card["title"]}}</x-slot>
                </x-card>
                </a>
            </div>
            @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="/"> <button>load more</button></a>
    </div>
 
</div>
</section>
@endsection

@section("icon menu")
<section class="bg-blu-icon py-5"> <div class="container">
        <ul class="flex justify-content-between align-center w-100 p-0 m-0">          
            @foreach($icons as $icon)
            <li class="flex align-center"> 
                <a href="/" class="flex align-center gap-1 text-decoration-none text-light">
                    <img src="{{ $icon['icon'] }}" alt="{{ $icon['title'] }}" class="icons">
                    <span class="uppercase">{{ $icon['title'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection


