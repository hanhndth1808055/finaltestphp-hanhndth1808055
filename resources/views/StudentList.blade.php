@extends("layout1")
@section("main_content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Student List</h2>
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="zero_config" class="table table-striped table-bordered dataTable"
                                               role="grid" aria-describedby="zero_config_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 184px;">ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 294px;">Full Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 136px;">Age</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 136px;">Address</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 136px;">Phone Number</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($students as $student)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $student->id}}</td>
                                                    <td>{{ $student->name}}</td>
                                                    <td>{{ $student->age}}</td>
                                                    <td>{{ $student->address}}</td>
                                                    <td>{{ $student->telephone}}</td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
