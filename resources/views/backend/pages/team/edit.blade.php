@extends('backend.layouts.admin.app')
@section('title', 'Team')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Edit Member  </h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('team.index')}}">Team list</a></h4></div>
                  <div class="card-body">

                    <form action="{{route('team.update', $team->id)}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      @method('PUT')
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $team->name)}}">
                      </div>
                      
                      <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="{{old('designation', $team->designation)}}">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email', $team->email)}}">
                      </div>

                      <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{old('facebook', $team->facebook)}}">
                      </div>

                      <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{old('twitter', $team->twitter)}}">
                      </div>

                      <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="insta" value="{{old('insta', $team->insta)}}">
                      </div>

                      <div class="form-group">
                        <label>Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" value="{{old('linkedin', $team->linkedin)}}">
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="img" name="img" value="{{old('img', $team->img)}}">
                      </div>
                      <button class="btn btn-success btn-lg" type="submit">Update Member</button>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection