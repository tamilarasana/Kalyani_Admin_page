@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="continer">
    <div class="row">    
        <div class="col-md-12">
       
            <div class="card">
                <div class="card-header"> Add New Spectification 
                <a href="{{route('specname.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>               
             </div>
             <div class ="card-body">
               <div class="table-responsive">
                <table  id="specname" class="table table-hover">
                <thead class ="thead-dark" style="font-size: 0.7em;">
                       
                            <tr>
                                <!-- <th>Id</th> -->
                                <th>Specification Name</th>
                                <th>Status</th>
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>   
                        @foreach($specname as $item)
                                  
                            <tr>
                                <!-- <td>{{$item->id}}</td> -->
                                <td>{{$item->specname}}</td>				                                
                                    @if($item->status == 1)
                                      <td>Active</td>
                                    @else
                                      <td>Deactive</td>
                                    @endif
                                <td> 
                                <a href="{{url('specname-edit/'.$item->id)}}"  class="btn-sm btn-info"><i class="far fa-edit"></i></a>

                                <a href="{{url('specname-delete/'.$item->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i></a>

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
@if(Session::has('success'))
		<script>
			toastr.success("{!! Session::get('success')!!}");
		</script>
	@endif


<script>

$(document).ready( function () {
    $('#specname').DataTable();
} );
</script>

@endsection
