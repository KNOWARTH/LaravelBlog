@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Comment</div>

                <div class="panel-body">
      
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<form action= " {{ url('savecomment') }}" method="post">

<input type="hidden" name="_token" value="<?= csrf_token();?>">
<input type="hidden" name="users_id" value="<?= $id?>">
<input type="hidden" name="blogpost_id" value="<?= $id?>">
Name
<input type="text" name="commenter" class="form-control">
Email
<input type="text" name="email" class="form-control">
Comment
<textarea name="comment" rows="10" cols="5" class="form-control"></textarea>
 

<input type="submit" value="Post" class="btn-btn-primary">

</form>



</div>
        </div>
    </div>
</div>
@endsection
