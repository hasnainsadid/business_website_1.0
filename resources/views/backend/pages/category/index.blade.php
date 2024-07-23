@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Category list</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('category.create')}}">Create Category</a></h4></div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>SN</th>
                          <th>Category Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                      @foreach ($cats as $key=>$item)
                        <tr>
                          <td>{{++$key}}</td>                       
                          <td>{{$item->category}}</td>
                          <td>{{$item->status == 1 ? 'Active' : 'Inactive'}}</td>
                          <td>
                            <a href="{{route('category.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('category.destroy', $item->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger" onclick="return(confirm('Are you sure to delete?'))">Delete</button>
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