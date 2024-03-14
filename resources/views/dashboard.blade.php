<!DOCTYPE html>
<html lang="en">
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="app.css">
    <link href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container text-black">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>List of Courses</h2>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-between">
                                        <div class="btn-group" role="group" aria-label="Level Filter">
                                            <a href="{{ route('courses.filter', ['level' => 'All']) }}" class="btn btn-outline-dark @if(request('level') == 'All') active @endif">All</a>
                                            <a href="{{ route('courses.filter', ['level' => 'A1-1']) }}" class="btn btn-outline-dark @if(request('level') == 'A1-1') active @endif">A1-1</a>
                                            <a href="{{ route('courses.filter', ['level' => 'A1-2']) }}" class="btn btn-outline-dark @if(request('level') == 'A1-2') active @endif">A1-2</a>
                                            <a href="{{ route('courses.filter', ['level' => 'A2-1']) }}" class="btn btn-outline-dark @if(request('level') == 'A2-1') active @endif">A2-1</a>
                                            <a href="{{ route('courses.filter', ['level' => 'A2-2']) }}" class="btn btn-outline-dark @if(request('level') == 'A2-2') active @endif">A2-2</a>
                                            <a href="{{ route('courses.filter', ['level' => 'B1']) }}" class="btn btn-outline-dark @if(request('level') == 'B1') active @endif">B1</a>
                                        </div>
                                        <div class="search-bar">
                                            <form class="search-form d-flex align-items-center" method="GET" action="{{ route('courses.index') }}">
                                                @csrf
                                                <input type="text" name="query" placeholder="Search" title="Enter search keyword" value="{{ request('query') }}">
                                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                            </form>
                                        </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="row">
                                    @forelse($courses as $item)
                                        <div class="col-md-3 mb-4">
                                            <div class="card">
                                                <a href="{{ $item->url }}" target="_blank">
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
                                    @empty
                                        <p>No courses found.</p>
                                    @endforelse
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






