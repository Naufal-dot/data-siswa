@extends('../template')

@section('content')
<form class="mt-4" action="{{Route('Duabelasrpl.store')}}" method="post">
    @csrf
    <div class="group-input">
        <label for="">NISN</label>
        <input type="text" class="form-control" name="NISN" id="">
    </div>
    <div class="group-input">
        <label for="">Nama Siswa</label>
        <input type="text" class="form-control" name="NAMA_SISWA" id="">
    </div>
    <div class="group-input">
        <label for="">L/P</label>
        <input type="text" class="form-control" name="L_P" id="">
    </div>
    <div class="group-input">
        <label for="">Kelas</label>
        <input type="text" class="form-control" name="Kelas" id="">
    </div>
    <div class="group_input">
        <button class="btn btn-primary mt-4" type="submit" name="submit">Simpan</button>
    </div>
</form>

@endsection