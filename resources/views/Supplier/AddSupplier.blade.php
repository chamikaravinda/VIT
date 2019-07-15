@extends('layouts.admin')

@section('header')
    <h1>
        Add Suppliers
        <small></small>
    </h1>
@endsection

@section('content')



        <div class="col-md-8 col-md-offset-2" >
            <!--brand add form-->
            <div class="box box-info">
                <br>
                {!! Form::open(['action' => 'SupplierController@store','method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
                <div class="box-body">
                                <div class="form-group">
                                    {{ Form::label('name','Name',['class'=>'col-sm-2 control-label']) }}
                                    <div class="col-sm-10" >
                                        {{Form::text('name','',['class'=> 'form-control','placeholde'=>'name' ])}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('name','Address',['class'=>'col-sm-2 control-label']) }}

                                    <div class="col-sm-10">
                                        {{Form::text('address','',['class'=> 'form-control','placeholde'=>'address' ])}}
                                    </div>
                                </div>

                                <div class="form-group">

                                    {{ Form::label('name','Contact Number',['class'=>'col-sm-2 control-label']) }}

                                    <div class="col-sm-10">
                                        {{Form::text('contact','',['class'=> 'form-control','placeholde'=>'contact' ])}}
                                    </div>

                                </div>
                </div>
                            <div class="box-footer">
                                {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
                            </div>

            </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
                {!! Form::close() !!}
            </div>

            <br>
            <!--vehical type add form-->

            <!-- new sub type add form -->

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
