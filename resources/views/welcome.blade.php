<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" style="margin-top:750px;">
                <div class="title m-b-md">
                   Trainees Information
                </div>

<div class="title links">
<a href="{{route('store')}}">Store</a>
</div>


<div>
@foreach($Stacks as $stack => $employees)

<table class="table">
    <thead class="thead-dark">
      <tr><h3>{{$stack}}</h3></tr>
      <tr>      
        <th>Name</th>
        <th>Age</th>
        <th>Designation</th>
        <th>Qualification</th>
        <th>company</th>
        <th>Technology</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($employees as $employee)
    <div class="row">
           <div class="col-sm-2"></div><div class="col-sm-2"></div><div class="col-sm-2"></div>
    </div>
    
      <tr>

        <td><a href="{{route('userproducts',$employee['id'])}}">{{ $employee['name'] }}</a></td>
        <td>{{ $employee['age'] }}</td>
        <td>{{ $employee['designation'] }}</td>
        <td>{{ $employee['qualification'] }}</td>
        <td>{{ $employee['company'] }}</td>
        <td>{{$employee['technology']}}</td>
        <td>Rs {{$employee['salary']}}-PKR</td>
      </tr>

      @endforeach

@endforeach
    </tbody>

  </table>
<h1>Total Salary : {{$totalsalary}}</h1>


</div>
            </div>
        </div>
    </body>
</html>
