@extends('layouts.app')
@section('content')
    {{ Form::open(['url'=>'admin/stock', 'role' =>'form'])  }}
    @csrf
    <div class="box-body">
        <h3 class="box-title">Add Stock</h3>
        <div class="col-md-4">
            <label>Category:</label><br />
            <select name="category" id="category" class="demoInputBox">
                <option value="">Select Category</option>
                @foreach($assets as $asset)
                    {{ $asset->county_code }}
                    <option value="{{$asset->name}}">{{$asset->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('name','Name')  }}
                {{ Form::text('name',old('name'), ['class'=>'form-control']) }}
                @if($errors->has('name'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('name') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="col-md-4">

            <div class="form-group">
                {{ Form::label('brand','Brand')  }}
                {{ Form::text('brand',old('year_of_birth'), ['class'=>'form-control']) }}
                @if($errors->has('brand'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('brand') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('quantity','Quantity')  }}
                {{ Form::text('quantity',old('quantity'), ['class'=>'form-control']) }}
                @if($errors->has('quantity'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('quantity') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                Add Item
            </button>
        </div>
    </div>

    {{ Form::close() }}
@endsection