@extends('backend.layouts.admin.app')
@section('title')
    Service
@show
@section('content')
  <div class="main-content"> 
    <div class="row">
      <div class="col-12">
        <div class="card text-center"><h2 class="bg-dark text-light p-2" >Service list</h2>
          <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('service.create')}}">Create Service</a></h4></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Logo</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($service as $key=>$item)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{substr($item->description, 0, 50). ' ...'}}</td>
                      <td><i class="{{$item->logo}} fa-2x" style="font-size: 33px"></i></td>
                      <td>{{$item->status == 1 ? 'Available' : 'Not Available'}}</td>
                      <td>
                        <a href="{{route('service.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('service.show', $item->id)}}" class="btn btn-warning">show</a>
                        <form action="{{route('service.destroy', $item->id)}}" method="post" class="d-inline">
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