@extends('template')

@section('utama')
<div class="container mt-4">
    <h3>Daftar Tugas</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container mt-4">
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5 class="fw-bold mb-3" style="color:#626F47;">Tambah Tugas</h5>
            <form action="{{ route('tugas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="judul" class="form-control" placeholder="Judul tugas" required>
                </div>
                <div class="mb-3">
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi tugas" required></textarea>
                </div>
                <div class="mb-3">
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <button type="submit" class="btn" style="background-color: #626F47; color: white;">Tambah</button>
            </form>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="fw-bold mb-3" style="color:#626F47;">Daftar Tugas Saya</h5>

            @if($tugas->count() > 0)
                <ul class="list-group list-group-flush">
                    @foreach ($tugas as $tanggal => $items)
                        <li class="list-group-item">
                            <strong>{{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}</strong>
                            <ul class="list-group mt-2">
                                @foreach ($items as $item)
                                <li class="list-group-item d-flex align-items-center">
                                    <form action="{{ route('tugas.toggle', $item->id) }}" method="POST" class="me-3">
                                        @csrf
                                        @method('PATCH')
                                        <input type="checkbox" class="form-check-input toggle-checkbox" onclick="this.form.submit()"
                                            {{ $item->status == '1' ? 'checked' : '' }}>
                                    </form>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 {{ $item->status == '1' ? 'text-decoration-line-through text-muted' : '' }}">
                                            {{ $item->judul }}
                                        </h5>
                                        <p class="mb-0 {{ $item->status == '1' ? 'text-muted' : '' }}">
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                    <form action="{{ route('hapus', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm" style="background-color: #7b0f0f; color: white;">Hapus</button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">Belum ada tugas.</p>
            @endif
        </div>
    </div>
</div>
@endsection
