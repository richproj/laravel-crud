	@extends('template')
	@section('content')
	<div class="row mt-3">
		<div class="col-6">
			<h1>Data Siswa</h1>
		</div>
		<div class="col-6">
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				Tambah Siswa
			</button>
		</div>

		<table class="table table-striped">
			<tr>
				<th>NAMA DEPAN</th>
				<th>NAMA BELAKANG</th>
				<th>JENIS KELAMIN</th>
				<th>AGAMA</th>
				<th>ALAMAT</th>
				<th>AKSI</th>
			</tr>
			@foreach($data_siswa as $siswa)
			<tr>
				<td>{{ $siswa->nama_depan }}</td>
				<td>{{ $siswa->nama_belakang }}</td>
				<td>{{ $siswa->jenis_kelamin }}</td>
				<td>{{ $siswa->agama }}</td>
				<td>{{ $siswa->alamat }}</td>
				<td>
					<a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
					<a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="/siswa/create" method="POST">
						{{csrf_field()}}
						<div class="modal-body">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="nama_depan">Nama Depan</label>
										<input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan" required>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="nama_belakang">Nama Belakang</label>
										<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="jenis_kelamin">Pilih Jenis Kelamin</label>
								<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
									<option>Laki - Laki</option>
									<option>Perempuan</option>
									<option>Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="agama">Pilih Agama</label>
								<select class="form-control" id="agama" name="agama">
									<option>Islam</option>
									<option>Kristen</option>
									<option>Budha</option>
									<option>Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	@endsection