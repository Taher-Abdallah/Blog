
@section('title') Preview @endsection
<x-layout>

    <div class="card">
        <div class="card-header">
            profile info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{$post['title']}}</h5>
            <p class="card-text">Discreption: {{$post['description']}}</p>
        </div>

    </div>


    <div class="mt-5" >
        <div class="card">
            <div class="card-header">
                Post creator info
            </div>
            <div class="card-body">
                <h5 class="card-title">Name:{{$post['post_creator']}}</h5>
                <p class="card-text">Email: {{$user['email']}}</p>
                <p class="card-text">Created at: {{$user['created_at']}} </p>
            </div>
</x-layout>
