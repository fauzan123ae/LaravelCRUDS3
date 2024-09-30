@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Task</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol tambah task -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Tambah Task</a>
        </div>

        <!-- Tabel Task -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jatuh Tempo</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                @if ($task->status == 'pending')
                                    <span class="badge bg-warning">Pending</span>
                                @elseif ($task->status == 'in_progress')
                                    <span class="badge bg-primary">In Progress</span>
                                @else
                                    <span class="badge bg-success">Completed</span>
                                @endif
                            </td>
                            <td>{{ $task->due_date }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
