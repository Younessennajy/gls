@include('head')
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card center-card">
                <div class="card-header">Course Details</div>
                <div class="card-body">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" style="width: 300px; height: 200px;">
                    <h5 class="card-title">Name : {{ $course->name }}</h5>
                    <p class="card-text">Description : {{ $course->desc }}</p>
                    <p class="card-text">Level : {{ $course->level }}</p>
                    <p class="card-text">URL : {{ $course->url }}</p>
                    <p class="card-text">URL : {{ $course->url }}</p>
                    <p class="card-text">Date of Creation: {{ $course->created_at }}</p>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
