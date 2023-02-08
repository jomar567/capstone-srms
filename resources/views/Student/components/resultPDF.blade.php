<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students Result</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
</head>
<body>
<p>Name{{$students->student_ID}}</p>
<p>Name{{$students->fullName}}</p>
@foreach($courses as $course)
Course: {{$course->courseName}}
Year & Section: {{$course->courseYearNumeric}}{{$course->section}}
@endforeach
</body>
</html>
