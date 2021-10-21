@extends('layouts.master')
@section('title')
@endsection
@section('content')


    <div class="row"> 
        <div class="col-md-12">

            <div class="card">
                <div class="card-header"> Season
                <a href="{{url('update-season.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>               
                </div>              
                <div class ="card-body">
               <div class="table-responsive">
                <table id="season" class="table table-hover">
                        <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>  
                                <!-- <th>Id</th>          -->
                                <th>Season Name</th>
                                <th>Product Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($updateseason as $data)
                            <tr>
                                <!-- <td>{{$data->id}}</td> -->
                                <td>{{$data->season_name}}</td>
                                <td>{{$data->name}}</td>
                                <td> 
                                        <a href="{{url('/updateseason-delete/'.$data->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i></a>
                                </td>

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
        $('#season').DataTable();
    } );
    </script>

@endsection



