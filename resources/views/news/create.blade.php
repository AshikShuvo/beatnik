@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        
            Create New News
    </div>
    <div class="card-body">
        <form action="{{route('news.store')}}" method="post"enctype="multipart/form-data" >
            @csrf
           
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text"  class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="body"> body</label>
                <input id="body" type="hidden" name="body">
              <trix-editor input="body"></trix-editor>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input id="image" type="file"  class="form-control"  name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </form>
    </div>
   
  </div>
    
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js">
        
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
@endsection