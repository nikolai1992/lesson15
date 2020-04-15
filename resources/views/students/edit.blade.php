@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Edit student</div>
        <div class="card-body">
            {!! Form::open(['url'=>route('student.update', $student->id),'method'=>'patch']) !!}
                <div class="row">
                    <label>Name</label>
                    <input name="name" class="form-control" value="{{$student->name}}">
                </div>
                <div class="row">
                    <label>Subjects</label>
                    {{ Form::select('subjects_id[]', $subjects, $student->subjects, ['multiple' => 'multiple', 'class'=>'form-control select2']) }}
                </div>
                <input type="submit" value="Save" class="btn btn-success">
            {{Form::close()}}
        </div>
    </div>
@endsection