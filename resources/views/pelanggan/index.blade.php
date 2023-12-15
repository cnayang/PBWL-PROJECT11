@extends('layouts.app')
@section('content')
<h2>Pelanggan</h2>

<a href="{{ url('/pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Input Pelanggan</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>GOLONGAN</th>
        <th>NO. Pelanggan</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO HP</th>
        <th>NIK KTP</th>
        <th>SERI</th>
        <th>METERAN</th>
        <th>STATUS AKTIF</th>
        <th>USER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @php $no = 1; @endphp
    @foreach ($rows as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row['pel_id_gol'] }}</td>
        <td>{{ $row['pel_no'] }}</td>
        <td>{{ $row['pel_nama'] }}</td>
        <td>{{ $row['pel_alamat'] }}</td>
        <td>{{ $row['pel_hp'] }}</td>
        <td>{{ $row['pel_ktp'] }}</td>
        <td>{{ $row['pel_seri'] }}</td>
        <td>{{ $row['pel_meteran'] }}</td>
        <td>{{ $row['pel_aktif'] }}</td>
        <td>{{ $row['pel_id_user'] }}</td>
        <td><a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection