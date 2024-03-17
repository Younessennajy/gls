@include('head')
<body>
<div class="card col-8 mx-auto my-5" >
  <div class="card-header">Edit COURSE </div>
  <div class="card-body">

      <form action="{{ url('courses/' . $courses->id) }}" method="post"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $courses->id }}" />
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" value="{{ $courses->name }}" class="form-control">
        </div>

        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
          <textarea name="desc" cols="30" rows="10" class="form-control">{{ $courses->desc }}</textarea>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" name="image" class="form-control">
          <td><img src="{{ asset('storage/' . $courses->image) }}" alt="df" style="width: 100px;height: 100px;"></td>
        </div>

        <div class="mb-3">
          <label for="level" class="form-label">Level</label>
          <select name="level" id="level" class="form-select">
            <option value="All">All</option>
            <option value="A1-1">A1-1</option>
            <option value="A1-2">A1-2</option>
            <option value="A2-1">A2-1</option>
            <option value="A2-2">A2-2</option>
            <option value="B1">B1</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="url" class="form-label">URL</label>
          <input type="url" name="url" value="{{ $courses->url }}" class="form-control">
        </div>

        <input type="submit" value="Update" class="btn btn-success">
    </form>

  </div>
</div>

<!-- Bootstrap Bundle JS -->
</body>
</html>
