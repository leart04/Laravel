@extends('blog.admin.master')
@section('title','Add Products')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample" action="{{ route('add-products')}}" method="POST" enctype="multipart/form-data">
         @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Slug" name="slug">
          </div>
          
         
          <div class="form-group">
            <label>File upload</label>
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <input class="file-upload-browse btn btn-primary" type="file" name="image">
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Price</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" name="price">
          </div>
          <div class="form-group">
            <input class="form-control" type="checkbox" name="status" value="1" @if(old('name') == 1) checked @endif>
            </div>
          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="form-control" id="exampleTextarea1"  rows="4" name="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>

  @endsection