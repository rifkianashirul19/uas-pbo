@extends('admin.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md flex-md-nowrap
align-items-center pt-2 pb-2 mb-3 border-bottom">
  <h3 class="ms-3"> Layanan </h3>
</div>

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-12">
      <div class="bg-light rounded h-100 p-4">
        <div class="table-responsive">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahLayanan">
            Tambah
          </button>
          <div class="modal fade" id="tambahLayanan" tabindex="-1" aria-labelledby="tambahLayananLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="tambahLayananLabel">Tambah Layanan</h1>
                </div>
                <form method="POST" action="{{ route('store.info') }}">
                  @csrf
                  <div class="modal-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="Nama" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-3">
                      <label for="Harga" class="form-label">Harga</label>
                      <input type="number " class="form-control" id="Harga" name="harga" value="{{ old('harga') }}"
                        required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($layanans as $layanan )
              <tr>
                <th>{{ $layanan->id }}</th>
                <td>{{ $layanan->nama }}</td>
                <td>{{ $layanan->harga }}</td>
                <td>
                  <a href="/edit" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection