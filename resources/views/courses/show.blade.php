<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Centrer la carte au milieu de la page */
        .center-card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card center-card">
                <div class="card-header">Course Details</div>
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $course->name }}</h5>
                    <p class="card-text">Description : {{ $course->desc }}</p>
                    <p class="card-text">Image : {{ $course->image }}</p>
                    <p class="card-text">Level : {{ $course->level }}</p>
                    <p class="card-text">URL : {{ $course->url }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
</body>
</html>
