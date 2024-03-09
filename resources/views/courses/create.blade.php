@extends('courses.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Course</div>
  <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


      <form action="{{ url('/courses') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label for="desc">Description</label><br>
        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea><br>

        <label for="image">Image</label><br>
        <input type="file" name="image"  id="image" class="form-control">

        <label for="level">level</label><br>
        <select name="level" id="level">
            <option value="All">All</option>
            <option value="A1-1">A1-1</option>
            <option value="A1-2">A1-2</option>
            <option value="A2-1">A2-1</option>
            <option value="A2-2">A2-2</option>
            <option value="B1">B1</option>
        </select><br>

        <label for="url">URL</label><br>
        <input type="url" name="url"  id="url" class="form-control"><br><br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <form action="{{ url('/courses') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
    </form>
  </div>
</div>

@stop
