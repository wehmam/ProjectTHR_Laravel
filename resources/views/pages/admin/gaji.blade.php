@extends('layout.master')
@section('title','Halaman Gaji')
@section('data1', 'active')
@section('konten')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-Blue font-weight-bold">Data THR Karyawan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NRP</th>
                                    <th>NAMA</th>
                                    <th>BAGIAN</th>
                                    <th>LAMA KERJA</th>
                                    <th>GAJI</th>
                                    <th>THR</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($karyawan as $kar)
                                    <tr>
                                        @for($i=0;$i < count($kar);$i++)
                                            <td>{{ $kar[$i] }}</td>
                                        @endfor
                                        @if($kar[3] <=1 )
                                            <td>{{ $kar[4] * 2 }}</td>
                                        @elseif($kar[3] <= 5)
                                            <td>{{ $kar[4] * 3 }}</td> 
                                        @elseif($kar[3] <= 10)
                                            <td>{{ $kar[4] * 4 }}</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection