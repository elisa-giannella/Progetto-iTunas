<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <h1 class="text-center">Tutti i tuoi artisti della categoria {{$category->name}}</h1>
        </div>

        @foreach ($category->artists as $artist)
        {{-- $category->artists chiama il metodo artists() che ritorna un array con gli artisti che sono collegati all'id della categoria --}}
        <div class="col-3">
            <div class="card">
                <img src="{{ Storage::url($artist->img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ $artist->name }}</h5>
                        <a href="{{ route('artists.filter', ['category'=>$artist->category]) }}" class="text-end">{{ $artist->category->name }}</a>
                    </div>
                    <p class="card-text">{{ $artist->genre }}<br>{{ $artist->language }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('artist.show', $artist )}}" class="btn btn-warning">Dettagli</a>
                    <a href="{{ route('artist.edit', $artist )}}" class="btn btn-outline-warning">Modifica artista</a>
                    <form method="POST" action="{{ route('artist.delete', compact('artist')) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </form>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</x-layout>