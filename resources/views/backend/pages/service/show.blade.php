@extends('backend.layouts.admin.app')
@section('title', 'contact')
@section('content')     
  <div class="main-content"> 
    <div class="row">
      <div class="col-12">
        <div class="card text-center"><h2 class="bg-dark text-light p-2" >Service Details</h2>
          <div class="card-body">
            <div class="table-responsive">
              <form action="#" class="form">
                <div class="details">
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Service Title</label>
                    <input type="text" value="{{$service->title}}" class="form-control" readonly>
                  </div>
  
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Service Description</label>
                    <textarea class="form-control" readonly>{{$service->description}}</textarea>
                  </div>

                  <div class="form-group">
                    <label style="font-size: 0.95rem">Logo</label>
                    <i class="{{$service->logo}} d-block" style="font-size: 50px"></i>
                  </div>
  
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Service Status</label>
                    <input class="form-control" readonly value="{{$service->status == 1 ? 'Available' : 'Not Available'}}" >
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