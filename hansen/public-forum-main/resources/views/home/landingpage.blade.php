@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex items-center justify-center h-screen flex-col">
        <h1 class="text-[40px] italic">An Open Source Forum For <b>Everyone</b></h1>
        <h2 class="text-2xl italic"><b>Ask</b> for help, <b>Give</b> help, <b>Receive</b> help, and can interact with all
            users for
            <b>free</b>
        </h2>
        <a href="/register" class="bg-[#3a3dba] font-bold text-[#d9d999] mt-6 px-4 py-4 rounded-full">Register for
            free</a>
    </div>
@endsection
