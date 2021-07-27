@extends('layouts.app')
@section('content')





    <form action=" {{ route('register') }}  " method="post">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                    <div class="row">
                        <div class="col text-center title">
                            <h1>Register</h1>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col mt-4">
                            <input type="text" class="form-control @error('name') border-danger @enderror" name="name" placeholder="Name"
                            value="{{ old('name') }}"  />
                        </div>
                    </div>
                    @error('name')
                        <div class="text-danger mt-1 ">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="row align-items-center">
                        <div class="col mt-4">
                            <input type="text" class="form-control @error('username') border-danger @enderror " name="username" placeholder="Username"
                            value="{{ old('username') }}"/>
                        </div>
                    </div>
                    @error('username')
                        <div class="text-danger mt-1 ">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="row align-items-center mt-4">
                        <div class="col">
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
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <input type="password" class="form-control @error('password') border-danger @enderror" name="password_confirmation"
                                placeholder="Confirm Password" />
                        </div>
                    </div>
                    @error('password')
                    <div class="text-danger mt-1 ">
                        {{ $message }}
                    </div>
                @enderror

                    <div class="row ">
                        <div class="col ">
                            {{-- <input type="submit" class="btn btn-primary mt-4" value="Submit" /> --}}
                            <button class="btn btn-primary mt-4  " type="submit">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
