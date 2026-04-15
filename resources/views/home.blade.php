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
<section class="bg-blu-icon flex justify-content-center align-center uppercase text-light ">
    <div>
            <ul class="flex gap-5 align-center ">          
                @foreach($icons as $icon)
                <li>  <a href="/">
                     <img src="{{$icon["icon"]}}" alt="{{$icon["title"]}}" class="icons">
                       {{$icon["title"]}}
                     </a>
                   
                </li>
                @endforeach
            </ul>
    </div>
     
</section>
@endsection


