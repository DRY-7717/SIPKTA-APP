@extends('layouts.dashboard.main')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pengaduan</h3>
                    <p class="text-subtitle text-muted">
                        Navbar will appear on the top of the page.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Layout Vertical Navbar
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">About Vertical Navbar</h4>
                </div>
                <div class="card-body">
                    <form action="/dashboard/laporanpengaduan" method="post">
                        @csrf
                        <input type="text" name="namapelapor">
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection