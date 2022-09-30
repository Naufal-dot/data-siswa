@extends('..template')

@section('content')

	<div class="row">
		<div class="col-md-4">
			<div class="box-1 blue">
				<h2>36</h2>
				<p>Jumlah Siswa</p>
			  </div>
		</div>
		<div class="col-md-4">
			<div class="box-1 blue">
				<h2>36</h2>
				<p>Jumlah Kelas</p>
			  </div>
		</div>
		<div class="col-md-4">
			<div class="box-1 blue">
				<h2>36</h2>
				<p>Jumlah Jurusan</p>
			  </div>
		</div>
	</div>
	<div class="row">
	    <div class="data">
			<div class="content-data">
				<div class="head">
					<h3>Absensi Report</h3>
					<div class="menu">
						<i class='bx bx-dots-horizontal-rounded icon'></i>
						<ul class="menu-link">
							<li><a href="#">Edit</a></li>
							<li><a href="#">Save</a></li>
							<li><a href="#">Remove</a></li>
						</ul>
					</div>
				</div>
			<div class="chart">
				<div id="chart"></div>
			</div>
		</div>
	</div>
</div>
@endsection

