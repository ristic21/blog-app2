<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container"> 


    <form action="{{ url('createpost')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Enter title</label>
        <input name="title" id="title" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Enter body</label>
        <textarea name="body" class="form-control" id="body" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>

    </form>

    </div>

    @if ($errors->any()) 
        <div class="container">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
        
    @endif
    @if (session('status'))
        <div class="container">
            {{session('status')}}
        </div>
        
    @endif
</body>
</html>