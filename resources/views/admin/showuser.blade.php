@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>

                <div class="panel-body">
                    

                   <table border="2" align="center" class="table table-border table-hover">
                    <p style="color:red"><?php echo Session::get('message');?></p>

                      <button><a href ="<?php echo 'adduser' ?>"> Add User</a></button>
                   <thead>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                     
                </thead> 
                <tbody>
            <?php 
                foreach($data as $row){
            ?>

            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->email?></td>
             
                
            
            <td>
               <button>  <a href="<?php echo 'editprofile/'.$row->id?>">Edit</a> </button>
                <button> <a href="<?php echo 'deleteuser/' .$row->id?>">Delete</a>  </button>
            </td>
               </tr>
           
            
            <?php }?>   
    
            <?php echo $data->render(); ?>
    
            </tbody>
          </table> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
