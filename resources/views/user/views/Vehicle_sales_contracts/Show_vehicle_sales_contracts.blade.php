@extends('layouts.user')

@section('title')
عرض عقود بيع المركبات
@endsection

@section('contentHeader')
عقود بيع المركبات
@endsection

@section("contentHeaderLink")
    الرابط الاول
@endsection

@section("contentHeaderActive")
<a href="#">الرابط الثاني</a>
@endsection

@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">

                        <div class="card">
                            <div class="card-body">
                                <p></p>
    
                                <div class="table-responsive">
                                    <!-- Table with stripped rows -->
                                    <table id="Supplier_Managment" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>الاسم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>العنوان</th>
                                            <th>رقم الهاتف</th>
                                            <th>الرصيد</th>
                                            <th>تاريخ الانشاء</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
    
                                    </table>
                                    <!-- End Table with stripped rows -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.Left col -->

                    <!-- right col (We are only adding the ID to make the widgets sortable)-->

                    {{-- <section class="col-lg-5 connectedSortable">
                    </section> --}}
                    
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection