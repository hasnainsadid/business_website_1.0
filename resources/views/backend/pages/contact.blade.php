@extends('backend.layouts.admin.app')
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                    @foreach ($contact as $key => $item)
                    <tbody>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{substr($item->message, 0, 55). '...'}}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                    <tbody>
                    @endforeach
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