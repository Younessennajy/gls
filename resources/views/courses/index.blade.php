@extends('admin.adminhome')
@section('content')
    <div class="container " style="margin-top: 100px">
        <div class="row" style="margin: 20px;">
            <div class="col-full">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Courses </h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-between">
                            <div class="d-flex justify-between">
                                <div class="btn-group" role="group" aria-label="Level Filter">
                                    <a href="{{ route('courses.index', ['level' => 'All']) }}" class="btn btn-outline-dark @if(request('level') == 'All') active @endif">All</a>
                                    <a href="{{ route('courses.index', ['level' => 'A1-1']) }}" class="btn btn-outline-dark @if(request('level') == 'A1-1') active @endif">A1-1</a>
                                    <a href="{{ route('courses.index', ['level' => 'A1-2']) }}" class="btn btn-outline-dark @if(request('level') == 'A1-2') active @endif">A1-2</a>
                                    <a href="{{ route('courses.index', ['level' => 'A2-1']) }}" class="btn btn-outline-dark @if(request('level') == 'A2-1') active @endif">A2-1</a>
                                    <a href="{{ route('courses.index', ['level' => 'A2-2']) }}" class="btn btn-outline-dark @if(request('level') == 'A2-2') active @endif">A2-2</a>
                                    <a href="{{ route('courses.index', ['level' => 'B1']) }}" class="btn btn-outline-dark @if(request('level') == 'B1') active @endif">B1</a>
                                </div>
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
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>level</th>
                                        <th>URL</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td><img src="{{ asset('storage/' . $item->image) }}" alt="df" style="width: 100px;height: 100px;"></td>
                                        <td>{{ $item->level }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>
                                            <a href="{{ url('/courses/' . $item->id) }}" title="View Course">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="bi bi-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Course">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="bi bi-pencil-square" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete course" onclick="return confirm('Confirm delete?')">
                                                    <i class="bi bi-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $courses->links() }}

@endsection

