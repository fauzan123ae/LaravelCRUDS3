@extends('layouts.app')

@section('content')
    <h1>Detail</h1>

<h3>{{$task->title}}</h3>
<p><Strong>Deskripsi:</Strong>{{$task->description}}</p>
<p><Strong>Status:</Strong>{{$task->status}}</p>
<p><Strong>tanggal:</Strong>{{$task->due_date}}</p>

<button>HAPUS</button>
<button>EDIT</button>
<button>KEMBALI</button>
@endsection
