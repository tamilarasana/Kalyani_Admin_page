@extends('layouts.master')
@section('title')
@endsection
@section('content')


    <div class="row"> 
        <div class="col-md-12">

            <div class="card">
                <div class="card-header"> Banner Image
                <a href="{{route('category.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>               
                </div>              
                <div class ="card-body">
               <div class="table-responsive">
                <table id="category" class="table table-hover">
                        <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>           
                                <th>Brand Name</th>
                                <th>Image</th>
                                <th>About Brand</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categorys as $item)
                            <tr>
                                
                                <td>{{$item->brand_name}}</td>				
                                <td><img src="{{asset('uploads/Logo/'.$item->brand_logo)}}" height="75px" width="75px" /> </dd>
                                <td>{{$item->about_brand}}</td>
                                
                                    @if($item->status == 1)
                                      <td>Active</td>
                                    @else
                                      <td>Deactive</td>
                                    @endif
                                <td> <a href="{{url('/category-edit/'. $item->id)}}"  class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                                <a href="{{url('category-delete/'.$item->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i></a>


                            </tr>
                            @endforeach
                      
                          
                         </body>
                    </table>
</div>

            </div>
                     
        </div>
    </div>


<!-- {!! Toastr::message() !!} -->


@endsection

@section('scripts')
@if(Session::has('success'))
		<script>
			toastr.success("{!! Session::get('success')!!}");
		</script>
	@endif

<script>

$(document).ready( function () {
    $('#category').DataTable();
} );
</script>


@endsection



