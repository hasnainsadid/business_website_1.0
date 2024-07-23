@extends('backend.layouts.admin.app')
@section('title', 'contact')
@section('content')     
  <div class="main-content"> 
    <div class="row">
      <div class="col-12">
        <div class="card text-center"><h2 class="bg-dark text-light p-2" >Contact Details</h2>
          <div class="card-body">
            <div class="table-responsive">
              <form action="#" class="form">
                {{-- <div class="form-group image_section">
                  <label for="name" style="font-size: 0.95rem">Profile Picture</label> <br>
                  <img src="{{asset('')}}assets/img/{{$contact->img}}" alt="" width="200px">
                </div> --}}
                <div class="details">
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Name</label>
                    <input type="text" value="{{$contact->name}}" class="form-control" readonly>
                  </div>
  
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Email</label>
                    <input type="text" value="{{$contact->email}}" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label style="font-size: 0.95rem">Subject</label>
                    <input type="text" value="{{$contact->subject}}" class="form-control" readonly>
                  </div>
  
                  <div class="form-group">
                    <label style="font-size: 0.95rem">Message</label>
                    <textarea class="form-control" readonly>{{$contact->message}}</textarea>
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