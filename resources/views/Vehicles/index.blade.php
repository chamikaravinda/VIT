@extends('layouts.admin')

@section('header')
    <h1>
         Vehicles
        <small></small>
    </h1>
@endsection

@section('content')

    <div class="box box-info" style="min-height: 600px">
        <div class="box-body">
            <br><br>
             <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Vehicle No</th>
                        <th>Supplier</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Sub Type</th>
                        <th>Licence Expiry Date</th>
                        <th>Insurance Expiry Date</th>
                        <th>Fitness Expiry Date</th>
                        <th>Service Expiry Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{$vehicle->vehicle_no}}</td>
                            <td>{{$vehicle->supplier->name}}</td>
                            <td>{{$vehicle->brand->name}}</td>
                            <td>{{$vehicle-> type ->vehicleType}}</td>
                            <td>{{$vehicle-> subtype->vehicleSubType}}</td>
                            <td>{{$vehicle->insurance_expairy}}</td>
                            <td>{{$vehicle->licence_expairy}}</td>
                            <td>{{$vehicle->fitness_expairy}}</td>
                            <td>{{$vehicle->service_expiration}}</td>
                            <td>
                                <a href = "/vehicles/{!! $vehicle->id !!}/edit" class= " btn btn-link" > Edit </a>
                                {!!Form::open(['action' => ['VehiclesController@destroy', $vehicle->id],'method'=>'POST','class' => 'pull-right'])!!}

                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-link'])}}

                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('page_JavaScrips')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
    </script>
@endsection