@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
  <div class="main-content"> 
    <div class="row">
      <div class="col-12">
        <div class="card text-center"><h2 class="bg-dark text-light p-2" >Client Details</h2>
          {{-- <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('client.create')}}">Create Clients</a></h4></div> --}}
          <div class="card-body">
            <div class="table-responsive">
              <form action="#" class="form">
                <div class="form-group image_section">
                  <label for="name" style="font-size: 0.95rem">Profile Picture</label> <br>
                  <img src="{{asset('')}}assets/img/{{$client->img}}" alt="" width="200px">
                </div>
                <div class="details">
                  <div class="form-group">
                    <label for="name" style="font-size: 0.95rem">Name</label>
                    <input type="text" value="{{$client->name}}" class="form-control" readonly>
                  </div>
  
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Profession</label>
                    <input type="text" value="{{$client->profession}}" class="form-control" readonly>
                  </div>
  
                  <div class="form-group">
                    <label for="description" style="font-size: 0.95rem">Description</label>
                    <textarea name="description" class="form-control" readonly>{{$client->description}}</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection