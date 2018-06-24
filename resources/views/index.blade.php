<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">
<head>
    
    <meta charset="utf-8">
    <title>Movies Showing</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    
    </head>

   <body>
    <div class="container">
        <h1>Movies Showing Now</h1>
      <form method="GET" action="{{ url('films/search') }}">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
   <br/>
      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Release Year</th>
            </tr>
            @if(count($films) > 0)
                @foreach($films as $film)
                <tr>
                    <td>{{ $film->film_id }}</td>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->description }}</td>
                    <td>{{ $film->release_year }}</td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="text-danger">Result not found.</td>
            </tr>
            @endif
        </table>
   </div>
</body>
</html>
