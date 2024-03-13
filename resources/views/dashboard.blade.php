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
                                <form action="" method="get">
                                    @csrf
                                    <select name="level" id="level" onchange="this.form.submit()">
                                        <option value="All" @if(request('level') == 'All') selected @endif>All</option>
                                        <option value="A1-1" @if(request('level') == 'A1-1') selected @endif>A1-1</option>
                                        <option value="A1-2" @if(request('level') == 'A1-2') selected @endif>A1-2</option>
                                        <option value="A2-1" @if(request('level') == 'A2-1') selected @endif>A2-1</option>
                                        <option value="A2-2" @if(request('level') == 'A2-2') selected @endif>A2-2</option>
                                        <option value="B1" @if(request('level') == 'B1') selected @endif>B1</option>
                                    </select>
                                </form>
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






