@extends('layouts.app')

@section('content')

    <div class="bg-gray-300 items-center my-auto flex h-screen">
        <div class="bg-gray-700 text-white w-96 px-8 h-52%  rounded rounded-lg text-white mx-auto my-auto flex flex-col flex bg-gray-800">

            <div class="text-5xl mt-4 ">
                J<span class="underline mb-6 text-3xl">ots</span>
            </div>

            <div class="mt-10 mb-4 text-3xl ">
                <h2> Register </h2>
                <div class="text-blue-300 text-xs">
                    Enter your credentials below
                </div>
            </div>

            <form method="POST" action="{{route('register')}}" class="mt-4">
                @csrf
                <div>
                    <div class="space-y-5  flex flex-col">

                        <div class="relative">
                            <label for="name" class="font-bold absolute text-blue-300 pt-1 pl-3 text-xs ">Name</label>
                            <input name="name" id="name" type="text" value="{{old('name')}}" autocomplete="name" placeholder="Enter name" class="outline-none focus:bg-gray-300 bg-gray-500 h-14  pt-6  pl-3 text-sm w-full rounded rounded-l  text-white focus:text-gray-600 outline-none  ">
                            @error('name')
                            <span role="alert" class="text-red-600 text-xs">
                            <strong>
                                {{$message}}
                            </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="email" class="font-bold absolute text-blue-300 pt-1 pl-3 text-xs ">E-mail</label>
                            <input name="email" id="email" type="email" value="{{old('email')}}" autocomplete="email" placeholder="Enter e-mail" class="outline-none focus:bg-gray-300 bg-gray-500 h-14  pt-6  pl-3 text-sm w-full rounded rounded-l  text-white focus:text-gray-600 outline-none  ">
                            @error('email')
                            <span role="alert" class="text-red-600 text-xs">
                            <strong>
                                {{$message}}
                            </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="password" class="font-bold absolute text-blue-300 pt-1 pl-3 text-xs ">Password</label>
                            <input name="password" id="password" type="password"  autocomplete="new-password" placeholder="Enter password" class="outline-none focus:bg-gray-300 bg-gray-500 h-14  pt-6  pl-3 text-sm w-full rounded rounded-l  text-white focus:text-gray-600 outline-none  ">
                            @error('password')
                            <span role="alert" class="text-red-600 text-xs">
                            <strong>
                                {{$message}}
                            </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="password-confirm" class="font-bold absolute text-blue-300 pt-1 pl-3 text-xs ">Confirm Password</label>
                            <input name="password_confirmation" id="password-confirm" type="password" autocomplete="new-password"   class="outline-none focus:bg-gray-300 bg-gray-500 h-14  pt-6  pl-3 text-sm w-full rounded rounded-l  text-white focus:text-gray-600 outline-none  ">
                        </div>

                    </div>
                </div>

                <div>
                    <button class="bg-blue-200 mb-10 w-full h-14 mt-10 text-gray-700 justify-start flex items-center pl-3 font-semibold rounded rounded-l" type="submit" >Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
