@extends('courses.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Courses </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br/>

                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center " method="POST" action="#">
                            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
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
