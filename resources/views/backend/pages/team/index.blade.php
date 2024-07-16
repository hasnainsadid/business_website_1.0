@extends('backend.layouts.admin.app')
@section('title')
    Team
@show
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light" >Team list</h2>
                  <div class="card-header"><h4 class="btn btn-info">Manage Team</h4></div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>SN</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Img</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                      @foreach ($teams as $key=>$item)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->designation}}</td>
                          <td><img src="{{asset('')}}assets/img/{{$item->img}}" width="50px" style="border-radius: 5px"></td>
                          <td>{{$item->email}}</td>
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