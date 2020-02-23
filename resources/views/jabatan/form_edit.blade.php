@extends('layouts.index')
@section('content')
@foreach($data as $edit)
<form method="POST" action="{{route('jabatan.update',$edit->id)}}">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Jabatan</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="{{ $edit->nama }}" />
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-secondary" 
      value="ubah"><i class="fas fa-pen"></i>&nbsp;Ubah</button>
      <input type="hidden" name="id" value="{{ $edit->id }}">
    </div>
  </div>
</form>
@endforeach
@endsection