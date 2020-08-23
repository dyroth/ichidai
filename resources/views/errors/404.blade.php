@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center animated fadeInDown">
  <h1>404</h1>
  <h3 class="font-bold">Oops, we didn't find what you were looking for. Are you sure Chuck Norris didn't steal it?</h3>
{{--  <h3 class="font-bold">Oops! {{ class_basename($exception->getPrevious() ? : $exception) }}</h3>--}}

{{--  <div class="error-desc">--}}
{{--    {{ $exception->getPrevious() ? $exception->getPrevious()->getMessage() : $exception->getMessage() }}--}}
{{--    <form class="form-inline m-t" role="form">--}}
{{--      <div class="form-group">--}}
{{--        <input type="text" class="form-control" placeholder="Search">--}}
{{--      </div>--}}
{{--      <button type="submit" class="btn btn-primary">Search</button>--}}
{{--      <a href="{{ route('home') }}" class="btn btn-default">Home</a>--}}
{{--    </form>--}}
{{--  </div>--}}
</div>
@endsection
