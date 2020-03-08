	@extends('template')
	@section('content')
	<div class="row mt-3">
		<div class="col-6">
			<h1>Edit Siswa</h1>
			<hr>
		</div>
		<div class="col-6">
		</div>
		<div class="col-6">
			<form action="/siswa/{{$siswa->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="nama_depan">Nama Depan</label>
								<input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan" value="{{$siswa->nama_depan}}" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="nama_belakang">Nama Belakang</label>
								<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Pilih Jenis Kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$siswa->jenis_kelamin}}">
							<option value="Laki - Laki" @if($siswa->jenis_kelamin == 'Laki - Laki') selected @endif>Laki - Laki</option>
							<option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
							<option value="Lainnya" @if($siswa->jenis_kelamin == 'Lainnya') selected @endif>Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label for="agama">Pilih Agama</label>
						<select class="form-control" id="agama" name="agama" value="{{$siswa->agama}}">
							<option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
							<option value="Kristen" @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
							<option value="Budha" @if($siswa->agama == 'Budha') selected @endif>Budha</option>
							<option value="Lainnya" @if($siswa->agama == 'Lainnya') selected @endif>Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{$siswa->alamat}}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<a href="/siswa" class="btn btn-secondary">Batal</a>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
		<div class="col-6">
			<div class="col-6">
				<img src="{{asset('sekolah_edit.jpg')}}" width="550px" height="400px">

			</div>
		</div>
		
	</div>
	@endsection