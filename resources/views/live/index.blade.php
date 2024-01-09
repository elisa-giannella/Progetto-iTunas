<x-layout>

    <div class="container">
        <div class="row justify-content-center">

            @if (session()->has('success'))
            <div class="col-12 alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="col-12 my-3">
                <h1 class="text-center">I tuoi concerti preferiti</h2>
                </div>

                @foreach ($lives as $live)
                <div class="col-4">

                    <div class="card mb-3">
                        <div class="card-header fst-italic">
                            <i class="bi bi-geo-alt pe-2"></i>

                            {{ $live->location }}
                        </div>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ Storage::url($live->img) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $live->artist }}</h5>
                                    <p class="card-text">Tour {{ $live->tour }}</p>
                                    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <i class="bi bi-calendar-event-fill pe-2"></i>
                            {{ $live->date }}
                        </div>
                    </div>

                </div>
                @endforeach


            </div>
        </div>
    </x-layout>