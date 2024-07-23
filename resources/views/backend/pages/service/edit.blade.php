@extends('backend.layouts.admin.app')
@section('title', 'Service')
@section('content')     
  <div class="main-content"> 
    <div class="row">
      <div class="col-12">
        <div class="card text-center"><h2 class="bg-dark text-light p-2">Edit Service</h2>
          {{-- <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('service.index')}}">Service list</a></h4></div> --}}
          <div class="card-body">

            <form action="{{route('service.update', $service->id)}}" method="post">
              @csrf 
              @method('PUT')
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $service->title)}}">
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description', $service->description)}}">
              </div>
              
              Logo : <i class="{{$service->logo}} fa-2x" style="font-size: 30px"></i>
              <select name="logo" id="logo" class="form-control my-4">
                <option @selected($service->logo)>
                    {{$service->logo}} 
                </option>
                <option value="fa fa-font-awesome">Font awesome</option>
                <option value="fa fa-message">Message</option>
              </select>

              <select name="status" id="status" class="form-control my-4">
                <option @disabled($service->status) @selected($service->status)>{{($service->status) == 1 ? 'Available' : 'Not Available'}}</option>
                <option value="1">Available</option>
                <option value="0">Not Available</option>
              </select>
              <button class="btn btn-success btn-lg" type="submit">Update Service</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection