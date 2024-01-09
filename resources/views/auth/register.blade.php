<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12"><h2>Registrati</h2></div>

            <div class="col-12">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input name="name" type="text" class="form-control" id="name">
                        @error('name') {{ $message }} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email">
                        @error('email') {{ $message }} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        @error('password') {{ $message }} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password confirmation</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                        @error('password_confirmation') {{ $message }} @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>