@extends('backend.layouts.admin.app')
@section('title', 'client')
@section('content')     
      <div class="main-content"> 
            <div class="row">
              <div class="col-12">
                <div class="card text-center"><h2 class="bg-dark text-light p-2" >Add New Client</h2>
                  <div class="card-header"><h4 class="btn btn-info"><a class="text-dark" href="{{route('client.index')}}">Clients list</a></h4></div>
                  <div class="card-body">


                    <form action="{{route('client.update', $client->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $client->name)}}">
                      </div>
                      <div class="form-group">
                        <label>Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" value="{{old('name', $client->profession)}}">
                      </div>
                      <div class="form-group">
                        <label for="name">description</label>
                        {{-- <input type="text" class="form-control" id="description" name="description" value="{{old('name', $client->description)}}"> --}}
                        <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Client's Description">{{old('description', $client->description)}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" class="form-control" id="img" name="img" value="{{old('img', $client->img)}}" >
                      </div>
                      <button class="btn btn-success btn-lg" type="submit">Update Client</button>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection