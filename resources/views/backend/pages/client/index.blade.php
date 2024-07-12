@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light" >Clients list</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('clients.create')}}">Create Clients</a></h4></div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>SN</th>
                          <th>Name</th>
                          <th>Profession</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    <tbody>
                      @foreach ($client as $key=>$item)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->profession}}</td>
                          <td>{{$item->description}}</td>
                          <td><img src="{{asset('')}}assets/img/{{$item->img}}" width="50px" style="border-radius: 5px"></td>                        
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