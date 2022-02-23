@extends('admin.admin_master')

{{-- {{data}} --}}

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">Fee Category Table</h3>
                        <a href="{{route('fee_category_amount.show_create_form')}}" class="btn btn-success" style="float: right">Add Fee Category</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Fee Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fee_category_amounts as $key => $fee_category_amount)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$fee_category_amount['fee_category']['name']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-info" href="{{route("fee_category_amount.show",$fee_category_amount['fee_category']['id'])}}"><i class="ti-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
