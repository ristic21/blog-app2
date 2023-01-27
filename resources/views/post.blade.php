<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Post</title>
</head>
<body>
    @include('components.header')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">{{$post->title}}</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">{{$post->body}}</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="/posts" type="button" class="btn btn-primary btn-lg px-4 gap-3">Back</a>
          </div>
        </div>
      </div>

      <form action="{{ url('createcomment')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Enter comment</label>
        <textarea name="body" class="form-control" id="body" rows="3" required></textarea>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
      </div>
      <button type="submit" class="btn btn-primary">Post</button>

    </form>

    <div>
        
        @foreach ($post->comments as $comment)
        <div class="card mb-4">
            <div class="card-body">
                <h4>Comment</h4>
              <p>{{$comment->body}}</p>
            </div>
        </div>
        @endforeach
    </div>

    @include('components.footer')

</body>
</html>