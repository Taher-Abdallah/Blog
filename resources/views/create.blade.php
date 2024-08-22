@section('title') Create Post @endsection
<x-layout>

    <form action="/post/create" method="POST">
        @csrf
        <div class="car">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">title</label>
                <input name="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">description </label>
                <input name="description"  class="form-control" id="exampleInputPassword1">
            </div>
<div>
            <label  class="form-label">Post Creator</label>
    <input name="post_creator"  class="form-control" id="exampleInputPassword1">


            </div>
        </div>
        <br>


        <button type="submit" class="btn btn-primary">Submit</button> </div>

    </form>
</x-layout>
