@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                 <div class="panel-heading">Comment</div>

                <div class="panel-body">
                    

                    <table border="2" align="center" class="table table-border table-hover">
                    <p style="color:red"><?php echo Session::get('message');?></p>

                    
                    <thead>
                      <th>Id</th>
                      <th>User</th>
                      <th>Blog</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Comment</th>
                      <th>Action</th>
                     
                </thead>
                <tbody>
            <?php 
                foreach($data as $row){
            ?>
            

            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->users_id ?></td>
                <td><?php echo $row->blogpost_id ?></td>
                <td><?php echo $row->commenter ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->comment ?></td>
                
            <td>


               <button> <a href="{{ 'approv_comment/'.$row->id }}">Aprove</a> </button> 
               <button>  <a href="<?php echo 'deletecomment/' .$row->id?>">Delete</a> </button> 
               
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
