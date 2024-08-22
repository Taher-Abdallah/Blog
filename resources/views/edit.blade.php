
@section('title') Edit @endsection
<x-layout>

    <form action="/posts/{{$post['id']}}" method="POST">
        @csrf
        @method('PUT')
        <div class="car">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">title</label>
                <input name="title" value="{{$post['title']}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">description</label>
                <br>
                <textarea name="description" style="width: 100%;" >
                    {{$post['description']}}
</textarea>
            </div>

            <label for="disabledSelect" class="form-label"> Post Creator</label>
                <input name="post_creator" value="                    {{$post['post_creator']}}
" class="form-control" id="exampleInputPassword1">


            <button type="submit" class="btn btn-primary">Edit</button></div>
    </form>




</x-layout>
