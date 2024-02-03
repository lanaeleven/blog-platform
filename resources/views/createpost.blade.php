@extends('layouts.dashboard')
@section('container')
    <h1 class="text-center text-white text-3xl">Create Post</h1>
    <div class="w-[500px]">
        <form action="/storepost" method="post">
            @csrf
            <div>
                <label for="judul" class="text-white">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full border h-8 text-black py-3 px-2 rounded-md">
            </div>
            <div>
                <label for="judul"></label>
                <input type="text" name="judul" id="judul" class="w-full border h-8 text-black py-3 px-2 rounded-md">
            </div>
        </form>
    </div>

    
@endsection