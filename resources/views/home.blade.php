@extends("layouts.master")

@php 
$cards = config("comics");
@endphp

@section("hero banner")
<section class="bg-herobanner"></section>
@endsection

@section("grid card")

<section class="bg-black">
    <div class="text-light uppercase badge-luca">current series</div>
<div class="container">

    <div class="row row-cols-3 row-cols-md-2 row-cols-lg-3 g-4">
            
            @foreach($cards as $card)
            <div class="col">     
                <x-card>
                    <x-slot:immagine>
                        <img src="{{$card["thumb"]}}" alt="{{$card["title"]}}" class="img-fluid rounded"></x-slot>
                    <x-slot:titolo>{{$card["title"]}}</x-slot>
                </x-card>
            </div>
            @endforeach
    </div>
</div>
</section>
@endsection

@section("icon menu")
<section>
    Inconcine menù su sfono blu
</section>
@endsection
