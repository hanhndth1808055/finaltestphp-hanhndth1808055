@extends("layout1")
@section("main_content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-10">
                    <div class="card-body">
                        <h2 class="pb-3">Add New Student</h2>
                        <form action="{{url("add-student")}}" class="form-horizontal" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                           value=""{{old("name")}}>
                                </div>
                                @if($errors->has("name"))
                                    <p class="error" style="color:red">{{$errors->first("name")}}</p>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Age</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="age" placeholder="Age"
                                           value=""{{old("age")}}>
                                </div>
                                @if($errors->has("age"))
                                    <p class="error" style="color:red">{{$errors->first("age")}}</p>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-sm-3 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address" placeholder="Address"
                                           value=""{{old("address")}}>
                                </div>
                                @if($errors->has("address"))
                                    <p class="error" style="color:red">{{$errors->first("address")}}</p>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="tel" class="col-sm-3 text-right control-label col-form-label">Phone
                                    Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{old("telephone")}}"
                                           name="telephone"
                                           placeholder="Phone number">
                                </div>
                                @if($errors->has("telephone"))
                                    <p class="error" style="color:red">{{$errors->first("telephone")}}</p>
                                @endif
                            </div>
                            <div class="form-group row text-center">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
