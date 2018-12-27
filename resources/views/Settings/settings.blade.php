@extends('layouts.admin')

@section('header')
    <h1>
        Settings
        <small></small>
    </h1>
@endsection

@section('content')

        <div class="row">
            <div  class="col-md-8">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Brands</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Vehicle Types</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Vehicle Sub Types</a></li>
                    </ul>
                    <div style="min-height: 556px" class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                         <table id="example2" class="table table-bordered table-hover">
                                             <thead>
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Name</th>
                                                 <th>No of Vehicles</th>
                                                 <th></th>
                                             </tr>
                                             </thead>
                                             <tbody>
                                             @foreach ($brands as $brand)
                                             <tr>
                                                 <td>{{$brand->id}}</td>
                                                 <td>{{$brand->name}}</td>
                                                 <td>2</td>
                                                 <td>
                                                     {!!Form::open(['route' =>['brand.delete', $brand->id],'method'=>'delete'])!!}
                                                     {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                                                     {!!Form::close()!!}
                                                 </td>
                                             </tr>
                                             @endforeach
                                             </tbody>
                                         </table>
                                    </div>
                        <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Type</th>
                                                <th>No of Vehicles</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($types as $type)
                                                <tr>
                                                    <td>{{$type->id}}</td>
                                                    <td>{{$type->vehicleType }}</td>
                                                    <td>2</td>
                                                    <td>
                                                        {!!Form::open(['route' =>['type.delete', $type->id],'method'=>'delete'])!!}
                                                        {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                                                        {!!Form::close()!!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                        <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_3">
                                        <div class="tab-pane" id="tab_2">
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Sub Type</th>
                                                    <th>No of Vehicles</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($subtypes as $subtype)
                                                    <tr>
                                                        <td>{{$subtype->id}}</td>
                                                        <td>{{$subtype->vehicleSubType}}</td>
                                                        <td>2</td>
                                                        <td>
                                                            {!!Form::open(['route' =>['subtype.delete', $subtype->id],'method'=>'delete'])!!}
                                                            {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                                                            {!!Form::close()!!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-4">
                <!--brand add form-->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Brand</h3>
                    </div>
                    {!! Form::open(['action' => 'SettingsController@storebrand','method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {{ Form::label('name','Name',['class'=>'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    {{Form::text('name','',['class'=> 'form-control','placeholde'=>'Title' ])}}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
                        </div>
                        <!-- /.box-footer -->
                    {!! Form::close() !!}
                </div>

                <br>
                <!--vehical type add form-->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Vehicle Type</h3>
                    </div>
                    {!! Form::open(['action' => 'SettingsController@storetype','method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('type','Type',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{Form::text('name','',['class'=> 'form-control','placeholde'=>'Title' ])}}
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
                    </div>
                    <!-- /.box-footer -->
                    {!! Form::close() !!}
                </div>

                <br>
                <!-- new sub type add form -->

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Sub Type</h3>
                    </div>
                    {!! Form::open(['action' => 'SettingsController@storesubtype','method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('type','Type',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{Form::text('name','',['class'=> 'form-control','placeholde'=>'Title' ])}}
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
                    </div>
                    <!-- /.box-footer -->
                    {!! Form::close() !!}
                </div>

            </div>
            </div>
        </div>



@endsection

@section('page_JavaScrips')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
