@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Student</div>
    <div class="card-body">

    <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br/>
        <input type="text" name="name" id="name" class="form-control"><br/>
        <label>Adress</label>
        <input type="text" name="adress" id="adress" class="form-control"><br/>
        <label>Mobile</label><br/>
        <input type="text" name="mobile" id="mobile" class="form-control"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
    
    </div>
</div>

@stop