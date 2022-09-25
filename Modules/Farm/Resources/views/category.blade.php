@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        @include('layouts.messages')
    </div>
</div>
<div class="row text-end">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Add Category</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $i=>$category)
                    <tr>
                        <td>  {{$categories->firstitem() + $i}}</td>
                        <td style="text-transform: capitalize">{{$category->category_name}} </td>
                        <td>
                            <div class="nav-item dropdown u-pro">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic btn-xs btn-info text-white" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-dow">Select &nbsp;</span> </a>
                                <div class="dropdown-menu dropdown-menu-left animated flipInY" style="border:none; min-width:6rem">
                                    <!-- text-->
                                    <a href="/farm/edit-category/{{$category->id}}" class="dropdown-item"> Edit</a>
                                    <!-- text-->
                                    <a href="/farm/delete-category/{{$category->id}}" class="dropdown-item"> delete</a>
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
                Showing {{$categories->firstitem()}} to {{$categories->lastitem()}} out of {{$categories->total()}} items
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{$categories->links()}}
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
                <h4 class="modal-title" id="exampleModalLabel1">Add New Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form action="/farm/create-category" method="get">
                    <div class="form-group">
                        <label for="CategoryName" class="form-label">Farm Category Item:</label>
                        <input type="text" class="form-control" name="category_name" id="CategoryName" required>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary text-white"> Add Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
