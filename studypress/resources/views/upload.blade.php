@extends('layouts.app')

@section('title', 'Upload')

@section('content')

    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <label for="upload-file">Upload</label>
            <input type="file" name="upload-file" class="form-control upload">
        </div>
        <input class="btn btn-success" type="submit" value="Upload File" name="submit">
    </form>

@endsection 