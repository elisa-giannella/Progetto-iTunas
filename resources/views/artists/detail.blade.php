<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

                <div class="card my-5 px-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ Storage::url($artist->img) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">{{ $artist->name }}</h5>
                                <p class="card-text">{{ $artist->language }}</p>
                                <p class="card-text"><small class="text-body-secondary">{{ $artist->genre }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>