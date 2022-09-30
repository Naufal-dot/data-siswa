@extends('../template')

@section('content')
<div class="btn btn-primary mt-4"><a style="color: white" class="text-decoration-none" href="">Tambah Siswa</a></div>
<table class="table mt-4" border="1">
    <thead>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>L/P</th>
        <th>Kelas</th>
        <th>Aksi</th>

    </thead>
    <tbody>
        @foreach ($siswatkj as $row)

        <tr>
            <td> {{ $row->NISN }} </td>
            <td> {{ $row->NAMA_SISWA }} </td>
            <td> {{ $row->L_P }} </td>
            <td> {{ $row->Kelas }} </td>
            <td>
                <a href="" class="btn"><i class='bx bx-edit-alt'></i></a>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <a type="submit" style="float: left;" href="" class="btn"><i class='bx bx-trash-alt'></i></a>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>


@endsection