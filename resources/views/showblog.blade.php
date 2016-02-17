@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Blog</div>

                <div class="panel-body">
                    

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
            <td>
              <button class="btn btn-secondary"><a href="{{ url('/comment') }}">Comment</a></button>
               
            </td>
            <?php }?>   
    
            <?php echo $data->render(); ?>
    
            </tbody>
          <!--   </table> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
