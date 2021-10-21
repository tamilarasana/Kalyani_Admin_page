

@extends('layouts.master')
@section('title')
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header"> Bike Models
                <a href="{{route('model.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>
                <!-- <a href="{{route('model.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>                -->
                <!-- <a hraf="#" class="btn-sm btn-success float-right"data-toggle="modal" data-target="#bikemodel"><i class="fas fa-plus-square"></i></a> -->
                </div>
                  <div class ="card-body">
               <div class="table-responsive">
                <table id ="model" class="table table-hover">
                <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>
                                <!-- <th>Id</th> -->
                                <th>Category</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($model as $item)
                            <tr>
                                <!-- <td>{{$item->id}}</td> -->
                                <td>{{$item->brand->brand_name}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td><a href="{{$item->file}}">File</a></td>
                                <td> <a href="{{url('model-edit/'. $item->id)}}"  class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                                <a href="{{url('model-delete/'.$item->id)}}"  class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
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


$(document).ready( function () {
    $('#model').DataTable();
} );
</script>

@endsection
