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
    .studentDetails {
      display: inline-block;
      vertical-align: middle
      color: red;
    }
  </style>
</head>
<body>

  <div class="studentDetails">
    <p>asdad</p>
    <p>asdad</p>
  </div>

    <div class="wrapper text-redpink">
    @foreach($courses as $course)
    <div class="row1">
    Name: <span>{{$students->fullName}}</span>
    Course: <span>{{$course->courseName}}</span>
    </div>

      Student ID: <span>{{$students->student_ID}}</span>
      Year & Section: <span>{{$course->courseYearNumeric}}{{$course->section}}</span>

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
                    <td colspan="3" class="text-center px-6 py-4">
                      No results found
                    </td>
                  </tr>
                @endif
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
                    Total Score
                  </td>
                  <td class="px-6 py-4 text-center">
                      <span class="text-base font-semibold">{{$sum}}</span>
                      out of
                      <span class="text-base font-semibold">{{$totalScore}}</span>
                  </td>
                </tr>
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
                    Percentage
                  </td>
                  <td class="px-6 py-4 text-center">
                      <p class="text-base font-semibold">{{$formatted_average}}%</p>
                  </td>
                </tr>
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
                    Remarks
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
