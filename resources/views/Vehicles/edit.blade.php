@extends('layouts.admin')

@section('header')
    <h1>
        Edit Vehicle
        <small></small>
    </h1>
@endsection

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-info">
            <br>
            {!! Form::open(['action' => ['VehiclesController@update',$vehicle->id],'method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
            <div class="box-body">
                <div class="form-group">
                        {{ Form::label('vehicle_no','Vehicle No:',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        {{Form::text('vehicle_no',$vehicle->vehicle_no, ['class'=> 'form-control','placeholde'=>'Title' ])}}
                    </div>
                </div>

                @if(count($suppliers)>0)
                    <div class="form-group">
                        {{Form::label('supplier_id','Supplier',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-8">
                            <select class="form-control" id="supplier_id" name="supplier_id">
                                <option disabled>Select a supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option
                                            @if($supplier->id == $vehicle->supplier_id )
                                            selected="selected"
                                            @endif
                                            value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @else
                    <center> <h4 class="text-red">You need a supplier to add a vehicle</h4></center>
                    <br>
                @endif @if(count($types)>0)
                    <div class="form-group">
                        {{Form::label('brand_id','Brand',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-8">
                            <select class="form-control" id="brand_id" name="brand_id">
                                <option disabled>Select a Brand</option>
                                @foreach($brands as $brand)
                                    <option
                                            @if($brand->id== $vehicle->brand_id )
                                            selected="selected"
                                            @endif
                                            value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @else
                    <center> <h4 class="text-red">You need a brand to add a vehicle</h4></center>
                    <br>
                @endif

                @if(count($types)>0)
                    <div class="form-group">
                        {{Form::label('type_id','Type',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-8">
                            <select class="form-control" id="type_id" name="type_id">
                                <option disabled>Select a Type</option>
                                @foreach($types as $type)
                                    <option
                                            @if($type->id == $vehicle->type_id )
                                            selected="selected"
                                            @endif
                                            value="{{$type->id}}">{{$type->vehicleType}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @else
                    <center> <h4 class="text-red">You need a Types to add a vehicle</h4></center>
                    <br>
                @endif

                @if(count($subtypes)>0)
                    <div class="form-group">
                        {{Form::label('subtype_id','Sub Type',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-8">
                            <select class="form-control" id="subtype_id" name="subtype_id">
                                <option selected="selected" disabled>Select a Type</option>
                                @foreach($subtypes as $subtype)
                                    <option value="{{$subtype->id}}">{{$subtype-> vehicleSubType}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @else
                    <center> <h4 class="text-red">You need a Sub types to add a vehicle</h4></center>
                    <br>
                @endif

                <div class="form-group">
                    {{ Form::label('insurance_expairy','Insurance Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" value="{{$vehicle->insurance_expairy}}" class="form-control pull-right" name="insurance_expairy" id="datepicker">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('licence_expairy','Licences Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" value="{{$vehicle->licence_expairy}}" name="licence_expairy" id="datepicker1">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('fitness_expairy','Fitness Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" value="{{$vehicle->fitness_expairy}}" name="fitness_expairy" id="datepicker2">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('service_expiration','Service Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" value="{{$vehicle->service_expiration}}" name="service_expiration" id="datepicker3">
                        </div>
                    </div>
                </div>

            </div>
            {{Form::hidden('_method','PUT')}}
            <!-- /.box-body -->
            <div class="box-footer">
                @if(count($suppliers)>0 && count($types)>0 )
                    {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
                @endif
                <small class="pull-right">Want a New category ? <a href='/settings' target="_blank">Go to settings</a></small>
            </div>
            <!-- /.box-footer -->
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@section('page_JavaScrips')
    <script>
        $('#datepicker').datepicker({
            autoclose: true
        })
        $('#datepicker1').datepicker({
            autoclose: true
        })
        $('#datepicker2').datepicker({
            autoclose: true
        })
        $('#datepicker3').datepicker({
            autoclose: true
        })
    </script>
@endsection