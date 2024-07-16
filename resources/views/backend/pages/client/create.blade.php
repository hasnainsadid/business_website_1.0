@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Add New Client</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('client.index')}}">Clients list</a></h4></div>
                  <div class="card-body">


                    <form action="{{route('client.store')}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Client's Name">
                      </div>
                      <div class="form-group">
                        <label>Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Client's Profession">
                      </div>
                      <div class="form-group">
                        <label for="name">description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Client's Description">
                      </div>
                      <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" class="form-control" id="img" name="img" >
                      </div>
                      <button class="btn btn-success btn-lg" type="submit">Add Client</button>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>      
    </div>
  </div>
@endsection