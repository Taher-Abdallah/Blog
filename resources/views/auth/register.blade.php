
<x-layout>
    <form action="/register" method="POST">
@csrf
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">First name</label>
            <input type="text"  name="first_name" id="first_name" class="form-control" />

        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Second name</label>
            <input type="text"  name="second_name" id="second_name" class="form-control" />

        </div>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" id="email" name="email" class="form-control" />

        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="password" name="password" class="form-control" />

        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />

        </div>



        <!-- Submit button -->
        <div>
        <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 center">Register</button>

        <a href="/" type="button"  class="btn btn-danger mb-4">Cancel</a>
        </div>
        </div>
    </form>
</x-layout>
