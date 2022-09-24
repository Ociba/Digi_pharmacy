@extends('layouts.app')
@section('content')
@include('layouts.messages')
<div class="row text-end">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Add Harvest</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plot Name</th>
                        <th scope="col">Crop</th>
                        <th scope="col">Harvest (kg)</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                        <td style="text-transform: capitalize"> </td>
                        <td style="text-transform: capitalize"> </td>
                        <td style="text-transform: capitalize"> </td>
                        <td style="text-transform: capitalize"> </td>
                        <td style="text-transform: capitalize"> </td>
                        <td style="text-transform: capitalize"> </td>
                        <td>
                            <div class="nav-item dropdown u-pro">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic btn-info text-white" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-dow">Select &nbsp;</span> </a>
                                <div class="dropdown-menu dropdown-menu-left animated flipInY" style="border:none; min-width:6rem">
                                    <!-- text-->
                                    <a href="#" class="dropdown-item"> Edit</a>
                                    <!-- text-->
                                    <a href="#" class="dropdown-item"> delete</a>
                                    <!-- text-->
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br><br>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Add Harvest</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="PlotName" class="form-label">Plot Name:</label>
                        <select class="form-control form-select" id="PlotName" name="plot_id">
                            <option>Choose One</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harvest" class="form-label">Harvest (kg):</label>
                        <input type="number" name="harvest" class="form-control" id="Harvest">
                    </div>
                    <div class="form-group">
                        <label for="SellingPrice" class="form-label">Selling Price:</label>
                        <input type="number" class="form-control" id="SellingPrice">
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-primary text-white"> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
