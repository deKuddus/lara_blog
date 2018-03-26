@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
<section class="content">
<div class="row">
	<h1 style="margin-left: 15px;">Update Permission </h1>

  @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <h5>{{ $error }}</h5>
                  @endforeach
              </ul>
          </div>
      @endif
<form role="form" method="post" action="{{route('permission.update',$permission->id)}}">
  {{csrf_field()}}
  {{method_field('PUT')}}
<div class="col-lg-6">
	<div class="box box-primary">
              <div class="box-body">
               <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$permission->name}}">
                </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <a class="btn btn-warning" href="{{route('permission.index')}}">Back</a>
            </div>
    </div>
</div>
 </form>
 </div>
</section>
</div>
  
@endsection