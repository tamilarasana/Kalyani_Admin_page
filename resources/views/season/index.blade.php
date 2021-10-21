@extends('layouts.master')
@section('title')
@endsection
@section('content')


    <div class="row"> 
        <div class="col-md-12">

            <div class="card">
                <div class="card-header"> Season
                <a href="{{url('season.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>               
                </div>              
                <div class ="card-body">
               <div class="table-responsive">
                <table id="season" class="table table-hover">
                        <thead class ="thead-dark" style="font-size: 0.7em;">
                            <tr>           
                                <th>Season Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                            
                                @foreach($seasons as $season)
                                    <tr>
                                        <td>{{$season->season_name}}</td>
                                        <td>{{$season->description}}</td>
                                        <td> <a href="{{url('/season-edit/'. $season->id)}}"  class="btn-sm btn-info"><i class="far fa-edit"></i></a>
                                        <a href="{{url('/season-delete/'. $season->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i></a>
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



