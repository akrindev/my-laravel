@extends('themes.default')

@section('title','Akrindev.me')

@section('konten')
<h1>Halo Home</h1>
<div class="container">
	@foreach($users as $user)
	<div class="alert alert-success">
			username: {{ $user->username }}<br/>
			kota	: {{ $user->kota }}<br/>
			Nama lengkap : {{ $user->nama_lengkap}}<br/>
			Tanggal lahir	: {{ $user->tgl_lahir }}
	</div>
	@endforeach
</div>
@endsection
