@extends('backend.layouts.admin.app')
@section('title', 'Service')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2">Add New Service</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('service.index')}}">Service list</a></h4></div>
                  <div class="card-body">


                    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Service Title">
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Service Description">
                      </div>
                      
                      <select name="logo" id="logo" class="form-control my-4">
                        <option disabled selected>Select logo</option>
                        <option value="fa fa-font-awesome">Font awesome</option>
                        <option value="fa fa-message">Message</option>
                      </select>

                      <select name="status" id="status" class="form-control my-4">
                        <option disabled selected>Select Status</option>
                        <option value="1">Available</option>
                        <option value="0">Not Available</option>
                      </select>
                      <button class="btn btn-success btn-lg" type="submit">Add Service</button>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>      
    </div>
  </div>

@endsection