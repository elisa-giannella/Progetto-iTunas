<x-layout>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-8">
                <h3 class="my-4">Aggiungi un nuovo concerto al tuo archivio</h3>
            </div>

            <div class="col-8">
                <form method="POST" action="{{ route('live.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artista:</label>
                        <input name="artist" type="text" class="form-control" id="artist" aria-describedby="artist">
                    </div>
                    <div class="mb-3">
                        <label for="tour" class="form-label">Tour:</label>
                        <input name="tour" type="string" class="form-control" id="tour" aria-describedby="tour">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genere Musicale:</label>
                        <input name="genre" type="text" class="form-control" id="genre" aria-describedby="genre">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input name="location" type="text" class="form-control" id="location" aria-describedby="location">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Data:</label>
                        <input name="date" type="date" class="form-control" id="date" aria-describedby="date">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Aggiungi un'immagine:</label>
                        <input name="img" type="file" class="form-control" id="img" aria-describedby="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>


</x-layout>