@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">CMS</div>

                <div class="panel-body">
                	<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<form action= " {{ url('savecms') }}" method="post">

<input type="hidden" name="_token" value="<?= csrf_token();?>">
<input type="hidden" name="users_id" value="<?= $id?>">

Title
<input type="text" name="title" class="form-control">
Description
<textarea name="content" rows="10" cols="5" class="form-control"></textarea>
<script>
CKEDITOR.replace('content');
</script>

<input type="submit" value="Post"a class="btn-btn-primary">
</form>
</div>
        </div>
    </div>
</div>
@endsection
