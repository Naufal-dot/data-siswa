@extends('../template')
@section('content')
@foreach ($duabelasrpl as $row)
<form method="POST" action="">
    @csrf
    @method('PUT')

    <div class="group_input">
        <label>NISN</label>
        <input type="text" class="form-control" name="NISN" value="{{$row->NISN}}">
    </div>

    <div class="group_input">
        <label>Nama Siswa</label>
        <input type="text" class="form-control" name="NAMA_SISWA" value="{{$row->NAMA_SISWA}}">
    </div>

    <div class="group_input">
        <label>L/P</label>
        <input type="text" class="form-control" name="L_P" value="{{$row->L_P}}">
    </div>

    <div class="group_input">
        <label>Kelas</label>
        <input type="number" class="form-control" name="Kelas" value="{{$row->Kelas}}">
    </div>

    <div class="group_input">
        <button type="submit">Simpan</button>
    </div>
</form>
@endforeach
@endsection