<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        h2 { color: #666; }
        p { margin: 10px 0; }
        ul { list-style-type: none; padding-left: 0; }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Statistik</h1>

    <p>Jumlah user yang membuat course: {{ $usersWithCourses }}</p>
    <p>Jumlah user yang tidak memiliki course: {{ $usersWithoutCourses }}</p>
    <p>Rata-rata jumlah course yang diikuti 1 user: {{ number_format($avgCoursesPerUser, 2) }}</p>

    @if($userWithMostCourses)
        <p>User yang mengikuti course terbanyak: {{ $userWithMostCourses->name }} ({{ $userWithMostCourses->enrollments_count }} courses)</p>
    @else
        <p>Tidak ada user yang mengikuti course</p>
    @endif

    <h2>List user yang tidak mengikuti course sama sekali:</h2>
    @if($usersWithoutEnrollments->isNotEmpty())
        <ul>
            @foreach($usersWithoutEnrollments as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Semua user mengikuti setidaknya satu course</p>
    @endif
</body>
</html>