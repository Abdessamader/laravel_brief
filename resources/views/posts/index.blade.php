@extends('layouts.app')
@section('content')


    <div class="card-header mt-2 mb-4">
        <h1 class="text-center">Posts</h1>
    </div>

    <div class="container">
    @auth

    <form class="w-50 m-auto d-block p-4 "style="background:rgba(0, 0, 0, 0.03)" action=" {{ route('posts') }} " method="post">
        @csrf
        <div class="row pt-2 flex-column ">
            <div class="col">
                    <textarea  class="form-control @error('body') border-danger @enderror"  placeholder="Post something" name="body" id="body" rows="4" ></textarea>
                    @error('body')
                    <div class="text-danger mt-1 ">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <button class="btn btn-primary my-3  " type="submit">Post</button>
                </div>

            </div>
            @endauth

            @if ($posts->count())

            @foreach ($posts as $post )

            <div class="col   ">
                <a href="" class="text-dark  pr-1  "style="font-weight: 800; text-decoration:none;"> {{$post->user->username}} </a><span style="font-size: smaller; color:gray" > {{$post->created_at->diffForHumans()}} </span>
                <p class="w-100 "> {{$post->body}} </p>
            </div>
            @endforeach

            {{$posts->links()}}


            @else
            <p class="text-center">there are no posts</p>
            @endif
        </form>





    </div>





@endsection
