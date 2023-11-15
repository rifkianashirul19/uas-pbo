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
          <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>John</td>
                <td>Doe</td>
                <td>jhon@email.com</td>
                <td>
                  <a href="/edit" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection