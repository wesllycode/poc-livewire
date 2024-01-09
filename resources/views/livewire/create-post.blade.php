<div>
   <h1> Title: "{{ $title }}</h1>

    @foreach($arrayNomes as $nome)
        <div wire:key="{{$nome}}">
            <h2>{{ $nome }}</h2>
        </div>
    @endforeach

    <form>
        <label for="title">Nome:</label>
        <input type="text" wire:model.live="nome">
    </form>
</div>
