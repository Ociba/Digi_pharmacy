@extends('layouts.app')
@section('content')
    @foreach($edit_plot as $plot)
    <form action="/farm/update-plot/{{request()->route()->plot_number}}" method="get">
        @csrf
        <div class="form-body">
            <div class="card-body">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Plot Location</label>
                                <input type="text" value="{{$plot->location}}" name="location" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name of Plot</label>
                                <input type="text" value="{{$plot->name_of_plot}}"  name="name_of_plot" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"> Crop</label>
                                <input type="text" value="{{$plot->name_of_crop}}"  name="name_of_crop" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name of Acres</label>
                                <input type="number" value="{{$plot->number_of_acres}}" name="number_of_acres" class="form-control" required>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="form-group">
                        <label for="DateofLocation" class="form-label">Date of Location:</label>
                        <input type="text" value="{{$plot->date_of_allocation}}" name="date_of_allocation" class="form-control" id="DateofLocation" required>
                    </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <button type="submit" class="btn btn-success text-white"> <i class="ti-check"></i> Save Changes</button>
                </div>
            </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection