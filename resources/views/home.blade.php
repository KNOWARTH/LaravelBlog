@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Recent Blog</div>
              
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                   <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">  
               
               
<<<<<<< HEAD

                   <!--  <table border="2" align="center" class="table table-border table-hover">  -->
                    <p style="color:red"><?php echo Session::get('message');?></p>

                    
                   <!--  <thead>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Publish</th>
                      <th>Action</th>
                     
                </thead> -->
                <tbody>
                
            <?php 
                foreach($data as $row){
            ?>
            

            <tr>
              
                
                <td><h1><?php echo $row->title ?></h1></td>
                <td><?php echo $row->content?></td>
                 <td><button class="btn btn-primary">Publish </button>  <?php echo $row->published_at?></td>

            </tr>

        
                <td>
              <button class="btn btn-secondary"><a href="{{ 'comment/'.$row->id }}">Comment</a></button>
            </td>
              
            <?php }?>   

=======

                   <!--  <table border="2" align="center" class="table table-border table-hover"> -->
                    <p style="color:red"><?php echo Session::get('message');?></p>

                      
                   <!--  <thead>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Publish</th>
                      <th>Action</th>
                     
                </thead> -->
                <tbody>
            <?php 
                foreach($data as $row){
            ?>
            

            <tr>
               <!--  <td><?php echo $row->id ?></td> -->
                
                <td><h1><?php echo $row->title ?></h1></td>
                <td><?php echo $row->content?></td>
                 <td><button class="btn btn-primary">Publish </button>  <?php echo $row->published_at?></td>

            </tr>

                
               <button class="btn btn-secondary"><a href="{{ url('/comment') }}">Comment</a></button>
               
            <?php }?>   
    
            <?php echo $data->render(); ?>
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
            
            </tbody>
          <!--   </table> -->
                 
              </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
