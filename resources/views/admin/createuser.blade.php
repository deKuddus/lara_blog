@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
<section class="content">
<div class="row">
	<h1 style="margin-left: 15px;">Create Your Admin</h1>

  @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <h5>{{ $error }}</h5>
                  @endforeach
              </ul>
          </div>
      @endif
<form role="form" method="post" action="{{route('user.store')}}">
  {{csrf_field()}}
<div class="col-lg-6">
	<div class="box box-primary">
              <div class="box-body">
               <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name.....">
                </div>

                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email....">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Email....">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <div class="checkbox">
                    <label><input type="checkbox"  name="status" value="1">Status</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password....">
                </div>

                 <div class="form-group">
                  <label for="confirm_password">Confirm Password</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password....">
                </div>

                <div class="form-group col-lg-12">
                  <label id="role">Assign Role</label>
                 <div class="row">
                   @foreach($roles as $role)
                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label><input type="checkbox" id="role" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
                      </div>
                    </div>
                   @endforeach
                 </div>
                </div>
                
               <button type="submit" class="btn btn-primary">Submit</button>
               <a class="btn btn-warning" href="{{route('user.index')}}">Back</a>
            </div>
    </div>
</div>
 </form>
 </div>
</section>
</div>
  
@endsection