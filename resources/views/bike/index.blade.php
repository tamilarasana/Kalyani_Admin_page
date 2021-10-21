@extends('layouts.master')
@section('title')
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Bike Models
                <a href="{!! route('image.index')!!}"class="btn btn-info float-right  mr-1">Image</a>
                <!-- <a href="{!! route('specification.index')!!}"class="btn btn-info float-right  mr-1">Add Specification</a> -->
                <!-- <a href="#"class=" colour_code btn btn-info float-right  mr-1">Create Colour</a> -->
                <a href="{!! route('bike.create')!!}"class="btn btn-success float-right  mr-1">Add </a>

                <!-- <a hraf="#" class="btn btn-primary float-right"data-toggle="modal" data-target="#bikemodel"  >Add</a> -->
              </div>
                  <div class ="card-body">
               <div class="table-responsive">
                <table  id ="bike" class="table table-hover">
                <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>           
                                <!-- <th>Id</th> -->
                                <th>Name</th>
                                <th>About Bike</th>
                                <th>Category</th>
                                <th>Bikemodel</th>
                                <th>Varient</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Colour</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                      @foreach($product as $item)
                        <tr>
                                <!-- <td>{{$item->id}}</td> -->
                                <td>{{$item->name}}</td>
                                <td>{{$item->about_bike}}</td>
                                <td>{{$item->brand->brand_name}}</td>
                                <td>{{$item->model->title}}</td>
                                <td>{{$item->varient->title}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->description}}</td>
                                <td><a href="{{url('/bike-colour/'.$item->id)}}"><i class="fas fa-palette"></i></a></td>
                                <td>
                                  <a href="{{url('/spec-get/'. $item->id)}}"><i class="fas fa-plus-circle"></i></a>
                                  <a href="{{url('/bike-edit/'. $item->id)}}" ><i class="far fa-edit"></i></a>
                                  <a href="{{url('bike-delete/'.$item->id)}}" > <i class="fa fa-trash"></i></a>
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

<script>

$(document).ready( function () {
    $('#bike').DataTable();
} );
</script>

@endsection





