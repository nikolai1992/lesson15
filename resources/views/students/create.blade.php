@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Add new student</div>
        <div class="card-body">
            {!! Form::open(['url'=>route('student.store'),'method'=>'POST']) !!}
            <div class="row">
                <label>Name</label>
                <input name="name" class="form-control" value="">
            </div><br>
            <div class="row">
                <label>Subjects</label>
                {{ Form::select('subjects_id[]', $subjects, null, ['multiple' => 'multiple', 'class'=>'form-control select2']) }}
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
            {{Form::close()}}
        </div>
    </div>
@endsection