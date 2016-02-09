@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<form action= " {{ url('save') }}" method="post">

<input type="hidden" name="_token" value="<?= csrf_token();?>">
First Name
<input type="text" name="firstname" class="form-control">
Last Name
<input type="text" name="lastname" rows="10"  class="form-control">
Email
<input type="text" name="email" rows="10" class="form-control">
Comment
<textarea name="comment" rows="10" cols="5" class="form-control"></textarea>
<input type="submit" value="Submit" class="btn-btn-primary">
</form>
 </div>
        </div>
    </div>
</div>
@endsection