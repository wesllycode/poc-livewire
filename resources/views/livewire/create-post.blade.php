<div>
   <h1> Title: "{{ $title }}</h1>

    @foreach($arrayNomes as $nome)
        <div wire:key="{{$nome}}">
            <h2>{{ $nome }}</h2>
        </div>
    @endforeach
</div>
