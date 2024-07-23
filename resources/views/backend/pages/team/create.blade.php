@extends('backend.layouts.admin.app')
@section('title', 'Team')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Add New Member  </h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('team.index')}}">Team list</a></h4></div>
                  <div class="card-body">

                    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                      </div>
                      
                      <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="description" name="designation" placeholder="Enter Designation">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                      </div>

                      <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook Link">
                      </div>

                      <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter Link">
                      </div>

                      <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="insta" placeholder="Enter Instagram Link">
                      </div>

                      <div class="form-group">
                        <label>Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="Enter Linkedin Link">
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="img" name="img" >
                      </div>
                      <button class="btn btn-success btn-lg" type="submit">Add Member</button>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection