@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Task Baru</h1>

        <!-- Error handling -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Task -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf

                    <!-- Judul Task -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Task</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan judul task" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Deskripsi task" required></textarea>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="pending">Pending</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <!-- Jatuh Tempo -->
                    <div class="mb-3">
                        <label for="due_date" class="form-label">Jatuh Tempo</label>
                        <input type="date" name="due_date" class="form-control" id="due_date" required>
                    </div>

                    <!-- ID User -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">ID User</label>
                        <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Masukkan ID user" required>
                    </div>

                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary btn-block">Simpan Task</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
