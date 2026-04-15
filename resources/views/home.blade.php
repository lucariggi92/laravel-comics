@extends("layouts.master")

@section("contenuto")
<h1>Hero Banner</h1>
@endsection

@section("prodotti")
<section>

    @for($i=0; $i<4; $i++)
<x-card>
    immagine card
</x-card>
    @endfor


</section>
@endsection

