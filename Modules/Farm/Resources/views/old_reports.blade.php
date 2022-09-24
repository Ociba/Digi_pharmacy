@extends('layouts.app')
@section('content')
@include('layouts.messages')
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
                        <th scope="col">Number of Acres</th>
                        <th scope="col">Expenses</th>
                        <th scope="col">Amount After Selling</th>
                        <th scope="col">Loss|Profit</th>
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
@endsection
