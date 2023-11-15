@extends('admin.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md flex-md-nowrap
align-items-center pt-2 pb-2 mb-3 border-bottom">
  {{-- <h3 class="ms-3"> Welcome Back, {{ auth()->user()->username }}</h3> --}}
</div>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-6 col-xl-3">
      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-line fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Today Sale</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-bar fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Month Sale</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-area fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Today Revenue</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-pie fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Total Revenue</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Pendapatan</h6>
      <a href="/dashboard/pendapatan">Show All</a>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">No.</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Layanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>Grooming</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>
            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>
            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>
            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>
            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection