@php 
$navlinks = config("navlinks")
@endphp


      <nav class="flex container space-between align-center uppercase f-header p-20  ">

        {{-- Link Logo --}}
      <a href="/"><img src="{{('img/dc-logo.png') }}" alt="Logo" class="logo"/></a>



      {{-- Menù Dinamico --}}
         <ul class="flex g-10">          
         @foreach($navlinks as $link)
          <li class="{{ $link['active'] ? 'active' : '' }}">
            <a href="">{{$link["title"]}}</a></li>
            @endforeach

        </ul>
      
      </nav>


