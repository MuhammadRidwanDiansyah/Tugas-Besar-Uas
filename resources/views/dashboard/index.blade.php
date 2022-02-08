@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>150</h3>

          <p>Order Baru</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>150</h3>

          <p>Member</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>150</h3>

          <p>Transaksi</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk Baru</h4>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-primary">
              More
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Kategori</th>
                <th>Produk</th>
                <th>Qty</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>R-001</td>
                <td>Realme</td>
                <td>Realme C20</td>
                <td>100</td>
                <td>1.500.000</td>
              </tr>
              <tr>
                <td>2</td>
                <td>X-001</td>
                <td>Redmi</td>
                <td>Redmi 10</td>
                <td>100</td>
                <td>1.700.000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>R-001</td>
                <td>Realme</td>
                <td>Realme C3</td>
                <td>20</td>
                <td>125.000</td>
              </tr>
              <tr>
                <td>4</td>
                <td>X-002</td>
                <td>Redmi</td>
                <td>Redmi Note 10s</td>
                <td>100</td>
                <td>2.999.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection