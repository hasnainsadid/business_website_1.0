@extends('backend.layouts.admin.app')
@section('title')
    service
@show
@section('content')
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light" >Service list</h2>
                  <div class="card-header"><h4 class="btn btn-info">Create Service</h4></div>
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
                          <td>{{$item->description}}</td>
                          <td><img src="{{asset('')}}assets/img/{{$item->logo}}" width="50px" style="border-radius: 5px"></td>
                          <td>{{$item->status==1? 'Available' : 'invailable'}}</td>
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