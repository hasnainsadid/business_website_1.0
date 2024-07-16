@extends('backend.layouts.admin.app')
@section('title')
    Projects
@show
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Project list</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('project.create')}}">Create Project</a></h4></div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>SN</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                      @foreach ($project as $key=>$item)
                        <tr>
                          <td>{{++$key}}</td>
                          <td><img src="{{asset('')}}assets/img/{{$item->img}}" width="50px" style="border-radius: 5px"></td>                        
                          <td>{{$item->title}}</td>
                          <td>{{$item->category->category}}</td>
                          <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
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
    </div>
  </div>
 
</body>


 
  
     

@endsection