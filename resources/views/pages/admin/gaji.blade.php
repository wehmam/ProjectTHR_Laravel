@extends('layout.master')
@section('title','Halaman Gaji')
{{-- @section('menuGaji', 'active') --}}
@section('content')  
<div class="container">
    <h1 class="text-center">DATA THR KARYAWAN</h1>
    <div class="col-sm-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">BAGIAN</th>
                    <th scope="col">LAMA KERJA</th>
                    <th scope="col">GAJI</th>
                    <th scope="col">THR</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $data)
                    <tr>
                        @for($i = 0; $i < count($data); $i++)
                            @if ($i < 4)   
                                <td>{{ $data[$i] }}</td>
                                @continue
                                @elseif ($data[4] <= 4000000)   
                                    <td class="bg-success">{{ $data[$i] }}</td>
                                    <td>{{ $data[4] * 2}}</td>
                                    @continue
                                {{-- @elseif ($data[4] == 5000000)   
                                    <td class="bg-danger">{{ $data[$i] }}</td>
                                    <td>{{ $data[4] * 3}}</td>
                                    @continue
                                @else
                                    <td class="bg-info">{{ $data[$i] }}</td>
                                    <td>{{ $data[4] * 4}}</td> --}}
                            @endif
                        @endfor
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 