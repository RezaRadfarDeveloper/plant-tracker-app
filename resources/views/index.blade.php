@extends('layouts.master')
@section('title','Home')
@section('css')

@endsection
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex flex-row flex-wrap p-3">
                <div class="mx-auto">
                @foreach($plants as $plant)
                    <!-- Profile Card -->
                        <div class="rounded-lg shadow-lg bg-gray-600 w-full my-4 flex flex-row flex-wrap p-3 antialiased">
                            <div class="md:w-3/5 w-full" >
                                <img class="rounded-lg shadow-lg antialiased" style="height: 200px; width: 400px" src="{{asset('img/gallery/'.$plant->photo)}}" alt="Not found">
                            </div>
                            <div class="md:w-2/3 w-full px-3 flex flex-row flex-wrap">
                                <div class="w-full flex justify-center align-top flex-col text-gray-700 font-semibold relative pt-3 md:pt-0">
                                    <div class="text-2xl text-dark my-3 self-center leading-tight">{{$plant->name}}</div>
                                    <div class="text-2xl text-dark self-center  leading-tight">{{$plant->species}}</div>
                                    <div class="text-2xl text-dark self-center my-5 leading-tight" style="height: 200px;width: 200px">
                                        <p>{{$plant->watering_instructions}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Profile Card -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
