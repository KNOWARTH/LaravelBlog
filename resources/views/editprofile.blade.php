@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<form action= " {{ url('updateprofile') }}" method="post">

<input type="hidden" name="_token" value="<?= csrf_token();?>">
 <input type="hidden" name="id" value="{{$row->id}}">
 
Name
<input type="text" name="name"  value="{{$row->name}}" class="form-control">

Email
<input type="text" name="Email"  value="{{$row->email}}" class="form-control">
 
Password
<input type="password" name="password"   class="form-control">

Confirm Password
<input type="password" name="password"   class="form-control">


<input type="submit" value="Update"a class="btn-btn-primary">
 
</form>
</div>
        </div>
    </div>
</div>

@endsection













                