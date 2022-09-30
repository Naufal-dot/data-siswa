 @extends('template')

 @section('content')
 <div class="row mt-4">
     <div class="col-md-5">
         <form action="" method="post">
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
                 <label for="">Kelas</label>
                 <input type="text" class="form-control" name="kelas" id="">
             </div>

         </form>
     </div>
     <div class="col-md-5">
         <div class="group-input">
             <label for="">Jenis kelamin</label>
             <input type="text" class="form-control" name="jenis_kelamin" id="">
         </div>
         <div class="group-input">
             <label for="">Keterangan</label>
             <input type="text" class="form-control" name="keterangan" id="">
         </div>
         <div class="group-input">
             <label for="">Tanggal</label>
             <input type="text" class="form-control" name="tanggal" id="">
         </div>
         <button class="btn btn-primary mt-4" type="submit"> Submit</button>

     </div>

 </div>
 <div class="row mt-4">


     <table class="table" border="1">
         <thead>
             <th>NISN</th>
             <th>Nama Siswa</th>
             <th>Kelas</th>
             <th>Jenis Kelamin</th>
             <th>Keterangan</th>
             <th>Tanggal</th>
             <th>Aksi</th>
         </thead>
         <tbody>

             @foreach ($absenkelas as $row)
             <tr>
                 <td> {{$row->NISN}} </td>
                 <td> {{$row->NAMA_SISWA}} </td>
                 <td> {{$row->Kelas}} </td>
                 <td> {{$row->jenis_kelamin}} </td>
                 <td> {{$row->keterangan}} </td>
                 <td> {{$row->tanggal}} </td>
                 <td>

                     <a class="btn btn-info" href="{{ route('Absen.edit',$row->id_absen) }}">Edit</a>
                     <form action="{{ route('Absen.destroy',$row->id_absen) }}" method="post">
                         @csrf
                         @method('DELETE')
                         <button type="submit">Delete</button>
                     </form>
                 </td>

             </tr>
             @endforeach
         </tbody>
     </table>

 </div>
 @endsection