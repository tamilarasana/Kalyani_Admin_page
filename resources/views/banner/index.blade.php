@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> Banner Image
                <a href="{{route('banner.create')}}" class="btn-sm btn-success float-right"><i class="fas fa-plus-square"></i></a>
            </div>
            <div class ="card-body">
                <div class="table-responsive">
                <table id="category" class="table table-hover">
                    <thead class ="thead-dark" style="font-size: 0.7em;">
                        <tr>
                            <th>Bennar Image</th>
                            <th>Position</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($banners as $banner)
                        <td><img src="{{asset($banner->banner_img)}}" height="75px" width="75px" /> </td>
                        <td>{{$banner->position}}</td>
                        @if($banner->type == 1)
                        <td>Web View</td>
                      @else
                        <td>Mobile View</td>
                      @endif
                        {{-- <td> <a href="{{route('banner-edit', $banner->id)}}"  class="btn-sm btn-info"><i class="far fa-edit"></i></a> --}}
                         <td>   <a href="{{route('banner-delete',$banner->id)}}"  class="btn-sm btn-danger"> <i class="fa fa-trash"></i></a>
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
$('#category').DataTable();
} );
</script>


@endsection



