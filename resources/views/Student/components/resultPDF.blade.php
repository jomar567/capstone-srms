<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students Result</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    *,
    *:before,
    *:after {
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    html {
      position: relative;
      width: 100%;
      height: 100%;
    }
    .column {
      float: left;
      width: 50%;
      padding: 10px;
    }
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .fs-3 {
      font-size: 16px;
      font-weight: 400;
    }
  </style>
</head>
<body>

  <div class="row">
    @foreach($courses as $course)
      <div class="column">
        <strong><p>Name: <span class="fs-3">{{$students->fullName}}</span></p></strong>
        <strong><p>Student ID: <span class="fs-3">{{$students->student_ID}}</span></p></strong>

      </div>
      <div class="column">
        <strong><p>Course: <span class="fs-3">{{$course->courseName}}</span></p></strong>
        <strong><p>Year & Section: <span class="fs-3">{{$course->courseYearNumeric}}{{$course->section}}</span></p></strong>
      </div>
    @endforeach
  </div>

  {{-- Table --}}
  <div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">
                    #
                </th>
                <th scope="col">
                    Subject
                </th>
                <th scope="col">
                    Marks
                </th>
            </tr>
        </thead>
        <tbody>
        @if(count($results) > 0)
            @foreach($results as $result)
              <tr class="bg-light border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                  {{$result->id}}
                </th>
                <td class="px-6 py-4">
                  {{$result->subject->subjectName}}
                </td>
                <td class="px-6 py-4">
                  {{$result->grades}}
                </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="3">
                No results found
              </td>
            </tr>
          @endif
          <tr class="bg-light border dark:bg-gray-800">
            <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
              <strong>Total Score</strong>
            </td>
            <td class="px-6 py-4 text-center">
                <span class="text-base font-semibold">{{$sum}}</span>
                out of
                <span class="text-base font-semibold">{{$totalScore}}</span>
            </td>
          </tr>
          <tr class="bg-light border dark:bg-gray-800">
            <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
              <strong>Percentage</strong>
            </td>
            <td class="px-6 py-4 text-center">
                <p class="text-base font-semibold">{{$formatted_average}}%</p>
            </td>
          </tr>
          <tr class="bg-light border dark:bg-gray-800">
            <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
              <strong>Remarks</strong>
            </td>
            <td class="px-6 py-4 text-center">
              <p class="text-base font-semibold">
                @if($formatted_average > 0)
                  {{$formatted_average >= 75 ? 'PASSED' : 'FAILED'}}
                @else
                  N/A
                @endif
              </p>
            </td>
          </tr>
        </tbody>
    </table>
  </div>

</body>
</html>
