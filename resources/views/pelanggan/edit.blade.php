@extends('layouts.app')

@section('content')
<h2>Add Pelanggan</h2>

<form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Golongan</label>
        <input type="text" name="pel_id_gol" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">No Pelanggan</label>
        <input type="text" name="pel_no" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="text" name="pel_nama" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="pel_alamat" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">No HP</label>
        <input type="text" name="pel_hp" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">NIK</label>
        <input type="text" name="pel_ktp" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">NO SERI</label>
        <input type="text" name="pel_seri" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Meteran</label>
        <input type="text" name="pel_meteran" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Status</label>
        <select name="pel_aktif" id="pel_aktif">
            <option value="Y">Aktif</option>
            <option value="N">Non-Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">User</label>
        <input type="text" name="pel_id_user" id="" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection