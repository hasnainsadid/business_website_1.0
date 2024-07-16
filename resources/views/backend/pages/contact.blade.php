@extends('backend.layouts.admin.app')
@section('title', 'contact')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light" >Contact list</h2>
                  
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
                        <td>{{substr($item->message, 0, 55). ' ...'}}</td>
                        <td>
                            <a href="{{route('contact.show', $item->id)}}" class="btn btn-primary">Show</a>
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

@endsection