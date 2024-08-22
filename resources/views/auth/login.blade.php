
<x-layout>
<form action="/login" method="POST">
    @csrf
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Email address</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required />
        @error('email'){{$message}}@enderror

    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password</label>
        <input type="password" id="password" name="password" class="form-control" required/>
        @error('password'){{$message}}@enderror

    </div>



    <!-- Submit button -->
    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 center">Log In</button>


    </div>
</form>
</x-layout>
