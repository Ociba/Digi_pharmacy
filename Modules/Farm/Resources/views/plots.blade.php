@extends('layouts.app')
@section('content')
@include('layouts.messages')
<div class="row text-end">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Add Plot</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plot No</th>
                        <th scope="col">Plot Name</th>
                        <th scope="col">Plot Location</th>
                        <th scope="col">Crop</th>
                        <th scope="col">Acres</th>
                        <th scope="col">Allocation Date</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($plots as $i=>$plot)
                    <tr>
                        <td>{{$plots->firstitem() + $i}}</td>
                        <td style="text-transform: capitalize">{{$plot->plot_number}}</td>
                        <td style="text-transform: capitalize">{{$plot->name_of_plot}}</td>
                        <td style="text-transform: capitalize">{{$plot->location}}</td>
                        <td style="text-transform: capitalize">{{$plot->name_of_crop}}</td>
                        <td style="text-transform: capitalize">{{$plot->number_of_acres}}</td>
                        <td style="text-transform: capitalize">{{$plot->date_of_allocation}}</td>
                        <td>
                            <div class="nav-item dropdown u-pro">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic btn-info text-white" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-dow">Select &nbsp;</span> </a>
                                <div class="dropdown-menu dropdown-menu-left animated flipInY" style="border:none; min-width:6rem">
                                    <!-- text-->
                                    <a href="/farm/edit-plot/{{$plot->plot_number}}" class="dropdown-item"> Edit</a>
                                    <!-- text-->
                                    <a href="/farm/delete-plot/{{$plot->plot_number}}" class="dropdown-item"> delete</a>
                                    <!-- text-->
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12 row">
                <div class="col-sm-6 col-md-6 col-lg-6 ml-3">
                    Showing {{$plots->firstitem()}} to {{$plots->lastitem()}} out of {{$plots->total()}} items
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    {{$plots->links()}}
                </div>
            </div>
        </div><br><br>
    </div>
</div>
<br><br><br>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Add New Plot</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form action="/farm/create-plot" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Plot Location</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name of Plot</label>
                                <input type="text" name="name_of_plot" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"> Crop</label>
                                <input type="text" name="name_of_crop" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name of Acres</label>
                                <input type="number" name="number_of_acres" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="form-group">
                        <label for="DateofLocation" class="form-label">Date of Location:</label>
                        <input type="date" name="date_of_allocation" class="form-control" id="DateofLocation" required>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary text-white"> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
