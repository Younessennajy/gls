<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cources</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="app.css">
        <link href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-gray-100">

                        <div class="container">
                            <div class="row" style="margin:20px;">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>List of Courses</h2>
                                        </div>
                                        <div class="card-body">
                                            <select name="level" id="level" >
                                                <option value="All">All</option>
                                                <option value="A1-1">A1-1</option>
                                                <option value="A1-2">A1-2</option>
                                                <option value="A2-1">A2-1</option>
                                                <option value="A2-2">A2-2</option>
                                                <option value="B1">B1</option>
                                            </select>
                                            <br/>
                                            <br/>
                                            <div class="row">
                                                @foreach($courses as $item)
                                                    <div class="col-md-4 mb-4">
                                                        <div class="card">
                                                            <a href="{{ $item->url }}" target="_blank"> <!-- Added anchor tag -->
                                                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="Course Image" style="height: 200px;">
                                                            </a>
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $item->name }}</h5>
                                                                <p class="card-text">{{ $item->desc }}</p>
                                                                <p class="card-text">{{ $item->level }}</p>
                                                            </div>
                                                            <div class="card-footer text-muted">
                                                                Created at: {{ $item->created_at->format('Y-m-d H:i:s') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
