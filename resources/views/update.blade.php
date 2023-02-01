@extends('bootstrap')
@section('title','update')
@section('content')
{{ $r }}

<form method="POST" enctype="multipart/form-data" action="{{ route('update',$ard->id ) }}">
    @csrf
    name: <input placeholder="{{ $ard->name }}" name="name" type="text" />
    <br><br>
    image: <input placeholder="{{ $ard->password }}" type="password" name="password"  />
    <br><br>
    <button name="update">update</button>

</form>
@endsection

<style>
    *{
        text-align: center;
        font-size: 20pt;
        margin-top: 25px;
    }
</style>