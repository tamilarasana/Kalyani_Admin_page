@extends('layouts.master')
@section('title')
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Bike Varients
                <a href="{{route('varient.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>               

                <!-- <a hraf="#" class="btn-sm btn-success float-right"data-toggle="modal" data-target="#bikemodel"><i class="fas fa-plus-square"></i></a> -->
                </div>
                  <div class ="card-body">
               <div class="table-responsive">
                <table id ="varient" class="table table-hover">
                <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>           
                                <!-- <th>Id</th> -->
                                <th>Category</th>
                                <th>Bikemodel</th>
                                <th>Title</th>
                                <th>Description</th>
                                <!-- <th>status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($varient as $item)
                            <tr>
                                <!-- <td>{{$item->id}}</td> -->
                                <td>{{$item->brand->brand_name}}</td>
                                <td>{{$item->model->title}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>  
                                <!-- <td>{{$item->status}}</td>   -->
                                <td> <a href="{{url('/varient-edit/'. $item->id)}}"  class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                                <a href="{{url('varient-delete/'.$item->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i></a>

                            </tr>
                            @endforeach
                          
                         </body>
                    </table>
                </div>
            </div>
                     
        </div>
    </div>

 

   

@endsection

@section('scripts')
@if(Session::has('success'))
		<script>
			toastr.success("{!! Session::get('success')!!}");
		</script>
	@endif
<script>
$(document).ready( function () {
    $('#varient').DataTable();
} );
</script>

@endsection
