<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3 class="my-4">Aggiungi un nuovo artista alla tua raccolta</h3>
            </div>

            <div class="col-8">

                <form method="POST" action={{ route('artists.store') }} enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="artistName" class="form-label">Nome artista:</label>
                        <input type="text" name="artistName" class="form-control" id="artistName" aria-describedby="artistName" value="{{old('artistName')}}">
                    </div>
                    <div class="mb-3">
                        <label for="artistGenre" class="form-label">Genere musicale:</label>
                        <input type="text" name="artistGenre" class="form-control" id="artistGenre" aria-describedby="artistGenre" value="{{old('artistGenre')}}">
                    </div>
                    <div class="mb-3">
                        <label for="artistLang" class="form-label">Lingua:</label>
                        <input type="text" name="artistLang" class="form-control" id="artistLang" aria-describedby="artistLang" value="{{old('artistLang')}}">
                    </div>
                    <div class="mb-3">
                        <label for="artistImg" class="form-label">Immagine:</label>
                        <input type="file" name="artistImg" class="form-control" id="artistImg" aria-describedby="artistImg">
                    </div>
                    <div class="mb-3">
                        <select name="category" class="form-select" aria-label="Default select example">
                            <option selected>Categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>
</x-layout>