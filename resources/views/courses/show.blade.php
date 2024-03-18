@include('head')
<body>

<div class="container">
    <div class="row">
            <div class="col-md-4 mx-auto my-5 ">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>List of Courses</h2>
                        <a href="/courses" class="btn btn-link text-decoration-none">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                    </div>
                    <div class="image-container position-relative">
                        <a href="{{ $course->url }}" target="_blank">
                            <img src="{{ asset('storage/' . $course->image) }}" class="card-img-top image-opacity" alt="Course Image" style="height: 200px;">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->desc }}</p>
                        <p class="card-text">{{ $course->level }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Created at: {{ $course->created_at->format('Y-m-d H:i:s') }}
                    </div>
                </div>
            </div>
    </div>
</div>

</body>
</html>
