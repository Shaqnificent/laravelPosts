@extends('layouts.app')

@section('content')
    <div class="flex justify-center my-1">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <x-post :post="$post"/>
        </div>

    </div>
@endsection