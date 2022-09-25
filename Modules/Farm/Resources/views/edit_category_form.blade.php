@extends('layouts.app')
@section('content')
    @foreach($edit_category as $category)
    <form action="/farm/update-category/{{request()->route()->category_id}}" method="get">
        @csrf
        <div class="form-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <input type="text" value="{{$category->category_name}}" name="category_name" class="form-control">
                        </div>
                    </div>
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