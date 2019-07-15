
@extends('layouts.admin')

@section('header')
    <h1>
        Current Supplirs
        <small></small>
    </h1>
@endsection

@section('content')

    <div class="row">
        <div  class="col-md-12">
            <div class="nav-tabs-custom">

                <div style="min-height: 556px" class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id            </th>
                                <th>Name          </th>
                                <th>Address       </th>
                                <th>Contact Number</th>
                                <th>              </th>
                                <th>              </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($supplier as $Supplier)
                                <tr>
                                    <td>{{$Supplier->id}}</td>
                                    <td>{{$Supplier->name}}</td>
                                    <td>{{$Supplier->address}}</td>
                                    <td>{{$Supplier->contact}}</td>
                                    <td> <a href="/suppliers/{{$Supplier->id}}/edit" class="btn btn-link"> Edit</a> </td>
                                    <td>

                                        {!!Form::open(['action'=>['SupplierController@destroy',$Supplier->id],'method'=>'POST', 'class' =>'pull-right'])!!}

                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                                            {!!Form::close()!!}


                                    </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
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
