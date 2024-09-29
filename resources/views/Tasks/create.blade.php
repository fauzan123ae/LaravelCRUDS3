@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Tambah Task Baru</h1>

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

                    <div class="form-group">
                        <label for="title">Judul Task</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan judul task" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Deskripsi task" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="pending">Pending</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="due_date">Jatuh Tempo</label>
                        <input type="date" name="due_date" class="form-control" id="due_date" required>
                    </div>

                    <div class="form-group">
                        <label for="user_id">ID User</label>
                        <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Masukkan ID user" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan Task</button>
                </form>
            </div>
        </div>
    </div>
@endsection
