@extends('backend.layouts.admin.app')
@section('title', 'Project')
@section('content')     
    <div class="main-content"> 
        <div class="row">
            <div class="col-12">
            <div class="card text-center"><h2 class="bg-dark text-light p-2">Edit Project</h2>
                <div class="card-body">


                    <form action="{{route('project.update', $project->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}" >
                        </div>

                        <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            <option @selected($project->id) @disabled($project->id)>{{$project->category->category}}</option>
                            @foreach ($cats as $item)
                                <option value="{{$item->id}}">{{$item->category}}</option>
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" class="form-control" id="img" name="img" >
                        </div>
                        <button class="btn btn-success btn-lg" type="submit">Edit Project</button>
                    </form>

                
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection