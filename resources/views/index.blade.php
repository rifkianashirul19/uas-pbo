@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md flex-md-nowrap
align-items-center pt-2 pb-2 mb-3 border-bottom">
  <h3 class="ms-3"> Welcome Back, {{ auth()->user()->name }}</h3>
</div>
@endsection