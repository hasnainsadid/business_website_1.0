@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
  <div class="main-content"> 
    <div class="row">
      <div class="col-12">
        <div class="card text-center"><h2 class="bg-dark text-light p-2" >Clients list</h2>
          <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('client.create')}}">Create Clients</a></h4></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <thead>
                <tr>
                  <th>SN</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Profession</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>

            <tbody>
              @foreach ($client as $key=>$item)
                <tr>
                  <td>{{++$key}}</td>
                  <td><img src="{{asset('')}}assets/img/{{$item->img}}" width="50px" style="border-radius: 5px"></td>                        
                  <td>{{$item->name}}</td>
                  <td>{{$item->profession}}</td>
                  <td>{{substr($item->description, 0, 40). ' ...'}}</td>
                  <td>
                    <a href="{{route('client.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('client.show', $item->id)}}" class="btn btn-primary">Show</a>
                    <form action="{{route('client.destroy', $item->id)}}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" onclick="return(confirm('Are you sure to Delete?'))" type="submit">Delete</button>
                    </form>

                  </td>
                
                </tr>
                @endforeach
            <tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection