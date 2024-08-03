@extends('siswa.layouts.main')
@section('content')
		<!-- start -->
		<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
				<div class="container">
						<div class="row align-items-end justify-content-center text-center">
								<div class="col-lg-7">
										<h2 class="mb-0">Pendaftaran</h2>
										<p>silahkan lengkapi data ibu kandung anda.</p>
								</div>
						</div>
				</div>
		</div>


		<div class="custom-breadcrumns border-bottom">
				<div class="container">
						<a href="index.html">Profil</a>
						<span class="icon-keyboard_arrow_right mx-3"></span>
						<span class="current">Isi Data</span>
				</div>
		</div>

		<div class="site-section">
				<div class="container">

						<div class="row justify-content-center mb-0 text-center">
								<div class="col-lg-4 mb-2">
										<h2 class="section-title-underline mb-5">
												<span>Data Ibu</span>
										</h2>
								</div>
						</div>
						<div class="row justify-content-center">
								<div class="col-md-12">
										<form action="{{ route('siswa.data-ibu.store') }}" method="POST">
												@csrf
												<div class="row mb-5">
														{{-- nik --}}
														<div class="col-md-6 form-group">
																<label for="nik" class="text-capitalize">nik</label>
																<input type="number" id="nik" name="nik" placeholder="masukan nik ibu ..."
																		value="{{ old('nik') }}" class="form-control @error('nik') is-invalid @enderror form-control-lg">
																@error('nik')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- nama --}}
														<div class="col-md-6 form-group">
																<label for="nama" class="text-capitalize">nama</label>
																<input type="text" id="nama" name="nama" placeholder="masukan nama ibu ..."
																		value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror form-control-lg">
																@error('nama')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>

														{{-- agama --}}
														<div class="col-md-6 form-group">
																<label for="agama" class="text-capitalize">Agama</label>
																<select id="agama"
																		class="form-control @error('agama') is-invalid @enderror form-control-lg form-select" name="agama">
																		<option value="">-- pilih agama --</option>
																		<option {{ old('agama') == 'islam' ? 'selected' : '' }} value="islam">islam</option>
																		<option {{ old('agama') == 'kristen' ? 'selected' : '' }} value="kristen">kristen protestan</option>
																		<option {{ old('agama') == 'katolik' ? 'selected' : '' }} value="katolik">katolik</option>
																		<option {{ old('agama') == 'hindu' ? 'selected' : '' }} value="hindu">hindu</option>
																		<option {{ old('agama') == 'buddha' ? 'selected' : '' }} value="buddha">buddha</option>
																		<option {{ old('agama') == 'konghucu' ? 'selected' : '' }} value="konghucu">konghucu</option>
																</select>
																@error('agama')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- tempat_lahir --}}
														<div class="col-md-6 form-group">
																<label for="tempat_lahir" class="text-capitalize">tempat lahir</label>
																<input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat_lahir ibu ..."
																		value="{{ old('tempat_lahir') }}"
																		class="form-control @error('tempat_lahir') is-invalid @enderror form-control-lg">
																@error('tempat_lahir')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- tanggal lahir --}}
														<div class="col-md-6 form-group">
																<label for="tanggal_lahir" class="text-capitalize">tanggal lahir</label>
																<input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukan tanggal_lahir ibu ..."
																		value="{{ old('tanggal_lahir') }}"
																		class="form-control @error('tanggal_lahir') is-invalid @enderror form-control-lg">
																@error('tanggal_lahir')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>


														{{-- nomor telepon --}}
														<div class="col-md-6 form-group">
																<label for="nomor_telepon" class="text-capitalize">nomor telepon</label>
																<input type="number" id="nomor_telepon" name="nomor_telepon" placeholder="masukan nomor_telepon ibu ..."
																		value="{{ old('nomor_telepon') }}"
																		class="form-control @error('nomor_telepon') is-invalid @enderror form-control-lg">
																@error('nomor_telepon')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>

														{{-- provinsi --}}
														<div class="col-md-6 form-group">
																<label for="provinsi" class="text-capitalize">provinsi</label>
																<select id="provinsi"
																		class="form-control @error('provinsi') is-invalid @enderror form-control-lg form-select"
																		name="provinsi">
																		<option value="">-- pilih provinsi --</option>
																</select>
																@error('provinsi')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- kabupaten --}}
														<div class="col-md-6 form-group">
																<label for="kabupaten" class="text-capitalize">kabupaten</label>
																<select id="kabupaten"
																		class="form-control @error('kabupaten') is-invalid @enderror form-control-lg form-select"
																		name="kabupaten">
																		<option value="">-- pilih kabupaten --</option>
																</select>
																@error('kabupaten')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- kecamatan --}}
														<div class="col-md-6 form-group">
																<label for="kecamatan" class="text-capitalize">kecamatan</label>
																<select id="kecamatan"
																		class="form-control @error('kecamatan') is-invalid @enderror form-control-lg form-select"
																		name="kecamatan">
																		<option value="">-- pilih kecamatan --</option>
																</select>
																@error('kecamatan')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- kelurahan --}}
														<div class="col-md-6 form-group">
																<label for="kelurahan" class="text-capitalize">kelurahan</label>
																<select id="kelurahan"
																		class="form-control @error('kelurahan') is-invalid @enderror form-control-lg form-select"
																		name="kelurahan">
																		<option value="">-- pilih kelurahan --</option>
																</select>
																@error('kelurahan')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>
														{{-- alamat --}}
														<div class="col-md-6 form-group">
																<label for="alamat" class="text-capitalize">alamat</label>
																<textarea id="alamat" name="alamat" placeholder="masukan alamat ibu ..."
																  class="form-control @error('alamat') is-invalid @enderror form-control-lg">{{ old('alamat') }}</textarea>
																@error('alamat')
																		<div class="invalid-feedback">{{ $message }}</div>
																@enderror
														</div>

												</div>
												<div class="row">
														<div class="col-12">
																<input type="submit" value="Selanjutnya" class="btn btn-primary btn-lg px-5">
														</div>
												</div>
										</form>

								</div>

						</div>



				</div>
		</div>
@endsection

@push('script')
		<script>
				$(document).ready(function() {
						var provinsiSelect = $("#provinsi");
						var kabupatenSelect = $("#kabupaten");
						var kecamatanSelect = $("#kecamatan");
						var kelurahanSelect = $("#kelurahan");

						// Fetch data provinsi
						$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json", function(provinsiData) {
								$.each(provinsiData, function(key, provinsi) {
										var option = $("<option></option>")
												.attr("value", provinsi.id)
												.text(provinsi.name);
										provinsiSelect.append(option);
								});
						});

						// Event listener untuk perubahan pilihan provinsi
						provinsiSelect.on("change", function() {
								var selectedProvinsiId = $(this).val();
								kabupatenSelect.empty().append($("<option></option>").attr("value", "").text(
										"-- pilih kabupaten / kota --"));
								kecamatanSelect.empty().append($("<option></option>").attr("value", "").text("-- pilih kecamatan --"));
								kelurahanSelect.empty().append($("<option></option>").attr("value", "").text("-- pilih kelurahan --"));
								if (selectedProvinsiId) {
										fetchKabupaten(selectedProvinsiId);
								}
						});

						// Event listener untuk perubahan pilihan kabupaten
						kabupatenSelect.on("change", function() {
								var selectedKabupatenId = $(this).val();
								kecamatanSelect.empty().append($("<option></option>").attr("value", "").text("-- pilih kecamatan --"));
								kelurahanSelect.empty().append($("<option></option>").attr("value", "").text("-- pilih kelurahan --"));
								if (selectedKabupatenId) {
										fetchKecamatan(selectedKabupatenId);
								}
						});

						// Event listener untuk perubahan pilihan kecamatan
						kecamatanSelect.on("change", function() {
								var selectedKecamatanId = $(this).val();
								kelurahanSelect.empty().append($("<option></option>").attr("value", "").text("-- pilih kelurahan --"));
								if (selectedKecamatanId) {
										fetchKelurahan(selectedKecamatanId);
								}
						});

						// Fungsi untuk mengambil data kabupaten berdasarkan ID provinsi
						function fetchKabupaten(provinsiId) {
								if (provinsiId) {
										$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/" + provinsiId + ".json", function(
												kabupatenData) {
												$.each(kabupatenData, function(key, kabupaten) {
														var option = $("<option></option>")
																.attr("value", kabupaten.id)
																.text(kabupaten.name);
														kabupatenSelect.append(option);
												});
										});
								}
						}

						// Fungsi untuk mengambil data kecamatan berdasarkan ID kabupaten
						function fetchKecamatan(kabupatenId) {
								if (kabupatenId) {
										$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/districts/" + kabupatenId + ".json", function(
												kecamatanData) {
												$.each(kecamatanData, function(key, kecamatan) {
														var option = $("<option></option>")
																.attr("value", kecamatan.id)
																.text(kecamatan.name);
														kecamatanSelect.append(option);
												});
										});
								}
						}

						// Fungsi untuk mengambil data kelurahan berdasarkan ID kecamatan
						function fetchKelurahan(kecamatanId) {
								if (kecamatanId) {
										$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/villages/" + kecamatanId + ".json", function(
												kelurahanData) {
												$.each(kelurahanData, function(key, kelurahan) {
														var option = $("<option></option>")
																.attr("value", kelurahan.id)
																.text(kelurahan.name);
														kelurahanSelect.append(option);
												});
										});
								}
						}
				});
		</script>
@endpush
