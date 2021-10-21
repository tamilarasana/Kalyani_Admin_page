@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="continer">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Add New Image
                <a href="/create" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>
                </div>
                <div class ="card-body">
               <div class="table-responsive">
                <table id ="image" class="table table-hover">
                <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>Image</th>
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody> 
                        
                          @foreach($image as $item)
                          <tr>
                            <td>{{$item ->id}}</td>                             
                            <td>{{$item->bike->name}}</td>                        
                            <td>
                              @foreach (explode('|', $item->image) as $image)                            
                              <img src="{{URL::to($image)}}" height="100px" width="100px" />
                              
                              @endforeach
                            </td>

                              <td> 
                              <a href="{{url('image-edit/'.$item->id)}}"   class="btn-sm btn-info"><i class="far fa-edit"></i></a>

                              <a href="{{url('image-delete/'.$item->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i>

                              </td>                              
                            </tr>
                          @endforeach                       
                        </body>
                    </table>
                </div>
            </div>
            </div>         
        </div>
    </div>
</div>

<!-- Image add Model  -->


@endsection

@section('scripts')

<script>

$(document).ready( function () {
    $('#image').DataTable();
} );
</script>

@endsection