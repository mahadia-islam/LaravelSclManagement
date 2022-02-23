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
                        <h3 class="box-title">{{$fee_category_amounts[0]['fee_category']['name']}}</h3>
                        <a href="{{route('fee_category_amount.show_create_form')}}" class="btn btn-success" style="float: right">Add Fee Category</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Student Class</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fee_category_amounts as $key => $fee_category_amount)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$fee_category_amount['student_class']['name']}}</td>
                                            <td>{{$fee_category_amount['amount']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-danger" href="{{route("fee_category_amount.delete",$fee_category_amount['id'])}}"><i class="ti-trash"></i></a>
                                                    <a class="btn btn-success" href="{{route("fee_category_amount.edit",$fee_category_amount['id'])}}"><i class="ti-pencil-alt"></i></a>
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
