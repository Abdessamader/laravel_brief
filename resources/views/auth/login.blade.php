@extends('layouts.app')
@section('content')


<form action=" {{ route('login') }}  " method="post">
    @csrf
    <div class="container d-flex  flex-column ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                <div class="row ">
                    <div class="col text-center title ">
                        <h1 style="margin-top: 6rem;">Login</h1>
                    </div>
                </div>
                <div class="row align-items-center mt-4">
                    <div class="col">

                        @if (session('status'))
                        <div class="bg-danger text-center p-3 rounded text-white mb-2">
                            {{ session('status') }}
                        </div>
                        @endif

                        <input type="email" class="form-control @error('email') border-danger @enderror" name="email" placeholder="Email"
                        value="{{ old('email') }}" />
                    </div>
                </div>
                @error('email')
                    <div class="text-danger mt-1 ">
                        {{ $message }}
                    </div>
                @enderror
                <div class="row align-items-center mt-4">
                    <div class="col">
                        <input type="password" class="form-control @error('password') border-danger @enderror" name="password" placeholder="Password" />
                    </div>
                </div>
                @error('password')
                <div class="text-danger mt-1 ">
                    {{ $message }}
                </div>
                @enderror
                <div class="mt-2">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="">
                        <label for="remember">Remember me</label>
                    </div>
                </div>


                <div class="row ">
                    <div class="col ">
                        {{-- <input type="submit" class="btn btn-primary mt-4" value="Submit" /> --}}
                        <button class="btn btn-primary mt-2  " type="submit">Login</button>
                    </div>
                </div>


            </div>
        </div>
    </div>








@endsection
