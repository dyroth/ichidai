@extends('admin._partials.main', ['memberPage' => true])

@section('content')
    {!! QrCode::size(200)->generate($route); !!}
@endsection
