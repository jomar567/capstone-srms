<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students Result</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
  <style>
    body {
      background-color: #EFF6EE;
    }

    table {
      border: 2px solid #000;
      width: 100%;
      padding: 25px;
    }

    tbody tr td,
    thead tr th {
      padding: 10px;
      border: 1px solid #000;
    }

    tbody tr .center {
      text-align: center;
    }

    thead tr th {
      text-align: justify;
      color: #fff;
      padding: 10px;
      }


    .wrapper .row1 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: initial;
    }
    </style>
</head>
<body>

<div>
          
            <div class="wrapper">
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
                <tr>
                    <td>
                      1
                    </th>
                    <td>
                        Sliver
                    </td>
                    <td>
                        Laptop
                    </td>
                </tr>
                <tr>
                    <td>
                      2
                    <td>
                        White
                    </td>
                    <td>
                        Laptop PC
                    </td>
                </tr>
                <tr>
                    <td>
                      3
                    <td>
                        Black
                    </td>
                    <td>
                        Accessories
                    </td>
                </tr>
                <tr>
                  <td class="center" colspan="2">
                    Total Score
                  </td>
                  <td>
                      <span>360</span>
                      out of
                      <span>400</span>
                  </td>
                </tr>
                <tr>
                  <td class="center" colspan="2">
                    Percentage
                  </td>
                  <td>
                      <p>90%</p>
                  </td>
                </tr>
                <tr>
                  <td class="center" colspan="2">
                    Remarks
                  </td>
                  <td>
                      <p>PASSED</p>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>
</div>
  
</body>
</html>
