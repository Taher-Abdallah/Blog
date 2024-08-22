@section('title') Taher Blog @endsection

<x-layout>

    <div class="text-end">
        @guest
        <a href="/login"  class="btn btn-primary btn-bg">Login</a>
        <a href="/register" class="btn btn-secondary btn-bg">Register</a>
        @endguest
            @auth
                <form method="POST" action="/logout" >
                    @csrf
                    <button type="submit" class="btn btn-danger btn-bg">logout</button>
                </form>
            @endauth


    </div>
    <div class="text-center">
        <a href="/post/create"  class="btn btn-success">Create Post</a>
    </div>

    <div class="mt-5" >
        <table class="table mt-4">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Post Creator</th>
                <th scope="col">description</th>
                <th scope="col">created at</th>
                <th scope="col">action</th>

            </tr>
            </thead>

@foreach($posts as $post)
{{--
    معلومة مهمة جدا
   ال posts دي لازم تبقي نعرفها في ال route
   لان دي اللي هنستدي منها من الداتا بيز
--}}
                <tr>
                    <td> {{$post['id']}}</td>
                    <td> {{$post['title']}}</td>
                    <td> {{$post['post_creator']}}</td>
                    <td> {{$post['description']}}</td>
                    <td> {{$post['created_at']}} </td>



                    <td>
                        <a href="/post/{{$post['id']}}" type="button" class="btn btn-outline-success">View</a>
                        <a href="/post/{{$post['id']}}/edit" type="button" class="btn btn-outline-warning">Edit</a>

                        <form action="/posts/{{$post['id']}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Delete</button>

                        </form>
                    </td>
                </tr>



                </tbody>
            @endforeach
        </table>

</x-layout>
