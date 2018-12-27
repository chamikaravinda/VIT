@extends('layouts.admin')

@section('header')
    <h1>
        Edit Suppliers
        <small></small>
    </h1>
@endsection

@section('content')



    <div class="col-md-8 col-md-offset-2">
        <!--brand add form-->
        <div class="box box-info">
            <br>
            {!! Form::open(['action' => ['SupplierController@update',$suppliers->id],'method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('name','Name',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-10" >
                        {{Form::text('name',$suppliers->name,['class'=> 'form-control','placeholder'=>'name' ])}}
                    </div>
                </div>

                <div class="form-group">

                    {{ Form::label('name','Address',['class'=>'col-sm-2 control-label']) }}

                    <div class="col-sm-10">
                        {{Form::text('address',$suppliers->address,['class'=> 'form-control','placeholder'=>'address' ])}}
                    </div>
                </div>


                <div class="form-group">
                    {{ Form::label('contactnum','Contact Number',['class'=>'col-sm-2 control-label']) }}

                    <div class="col-sm-10">
                        {{Form::text('contactnum',$suppliers->contactnum,['class'=> 'form-control','placeholder'=>'Contact Number' ])}}
                    </div>
                </div>


                </div>

            <div class="box-footer">

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Update',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
            </div>

            </div>
            {!! Form::close() !!}
        </div>

        <br>
        <!--vehical type add form-->

        <!-- new sub type add form -->

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
