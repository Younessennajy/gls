 @extends('courses.layout')

@section('content')
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
@endsection
