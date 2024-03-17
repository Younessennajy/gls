@include('head')
<body class="bg-white">
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2>List of Courses</h2>
                            <a href="/home" class="btn btn-link text-decoration-none">
                                <i class="bi bi-arrow-left"></i> Back to Course List
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="btn-group" role="group" aria-label="Level Filter">
                                    <a href="{{ route('courses.filter', ['level' => 'All']) }}" class="btn btn-outline-dark @if(request('level') == 'All') active @endif">All</a>
                                    <a href="{{ route('courses.filter', ['level' => 'A1-1']) }}" class="btn btn-outline-dark @if(request('level') == 'A1-1') active @endif">A1-1</a>
                                    <a href="{{ route('courses.filter', ['level' => 'A1-2']) }}" class="btn btn-outline-dark @if(request('level') == 'A1-2') active @endif">A1-2</a>
                                    <a href="{{ route('courses.filter', ['level' => 'A2-1']) }}" class="btn btn-outline-dark @if(request('level') == 'A2-1') active @endif">A2-1</a>
                                    <a href="{{ route('courses.filter', ['level' => 'A2-2']) }}" class="btn btn-outline-dark @if(request('level') == 'A2-2') active @endif">A2-2</a>
                                    <a href="{{ route('courses.filter', ['level' => 'B1']) }}" class="btn btn-outline-dark @if(request('level') == 'B1') active @endif">B1</a>
                                </div>
                                <div class="search-bar">
                                    <form class="search-form d-flex align-items-center" method="GET" action="{{ route('courses.filter') }}">
                                        @csrf
                                        <input type="text" name="query" placeholder="Search" title="Enter search keyword" value="{{ request('query') }}">
                                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                @forelse($courses as $item)
                                    <div class="col-md-6 col-lg-3 mb-4">
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
                                    <div class="col-md-12">
                                        <p>No courses found.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>