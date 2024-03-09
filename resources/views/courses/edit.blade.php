@extends('courses.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit COURSE </div>
  <div class="card-body">

      <form action="{{ url('courses/' . $courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $courses->id }}" />
        <label>Name</label><br>
        <input type="text" name="name" value="{{ $courses->name }}" class="form-control"><br>

        <label>Description</label><br>
        <textarea name="desc" cols="30" rows="10" class="form-control">{{ $courses->desc }}</textarea><br>

        <label>Image</label><br>
        <input type="file" name="image" class="form-control"><br>
        <td><img src="{{ asset('storage/' . $courses->image) }}" alt="df" style="width: 100px;height: 100px;"></td>

        <label for="level">level</label><br>
        <select name="level" id="level" value="{{ $courses->level }}">
            <option value="All">All</option>
            <option value="A1-1">A1-1</option>
            <option value="A1-2">A1-2</option>
            <option value="A2-1">A2-1</option>
            <option value="A2-2">A2-2</option>
            <option value="B1">B1</option>
        </select><br>

        <label>URL</label><br>
        <input type="url" name="url" value="{{ $courses->url }}" class="form-control"><br><br>

        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
