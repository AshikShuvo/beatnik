@extends('layouts.app')

@section('content')
@auth
<div class="d-flex justify-content-end my-2">

    <a href="{{route('news.create')}}" class="btn btn-success">Add News</a>
</div>
@endauth
<div class="card">
    <div class="card-header">news</div>
    <div class="card-body">
      @if ($news->count()>0)
      <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach ($news as $item)
            <tr>
              <td><img src="storage/news/{{$item->image}}" width="120px"height="100px" alt=""></td>
              <td>{{$item->title}}</td>
              

              <td><a href="{{route('news.show',$item->id)}}" class="btn btn-primary">View</a></td>
             @auth
             <td><form action="{{ route('news.destroy',$item->id)}}" method="post"> @csrf @method('DELETE') <button  type="submit" class="btn btn-danger ">
              Delete
               
              
              </button></form></td>
             @endauth 
            </tr>
            @endforeach
          </tbody>
      </table>
          @else
          <h3 class="text-center">No News Yet</h3>
      @endif
      
    </div>
   
  </div>
@endsection
