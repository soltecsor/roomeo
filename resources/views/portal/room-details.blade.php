@extends('portal.layouts.app')

@section('content')
	<room-details :item="{{ $id_unit }}"></room-details>
@endsection