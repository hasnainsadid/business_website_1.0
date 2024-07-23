@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Add New Category</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('category.index')}}">Category list</a></h4></div>
                  <div class="card-body">


                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="form-group">
                        <label for="category">Category Name</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Client's Name">
                      </div>
                      <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option selected disabled>Select Category Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                      </div>
                      
                      <button class="btn btn-success btn-lg" type="submit">Add Category</button>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection