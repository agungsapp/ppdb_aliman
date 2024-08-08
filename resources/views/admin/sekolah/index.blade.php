@extends('admin.layouts.main')
@section('content')
		<section class="container">
				<div class="row">
						<div class="col-12">
								{{-- card  --}}
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														Data Profil Sekolah
												</div>
										</div>

										<div class="row">
												<div class="col-12">
														<!-- Tampilkan semua pesan kesalahan -->
														@if ($errors->any())
																<div class="alert alert-danger" role="alert">
																		Terjadi Kesalahan
																		<div>
																				<ul style="color: red;">
																						@foreach ($errors->all() as $error)
																								<li>{{ $error }}</li>
																						@endforeach
																				</ul>
																		</div>
																</div>
														@endif
												</div>
										</div>

										<form action="{{ route('admin.sekolah.update', $sekolah->id) }}" method="post">
												@csrf
												@method('PUT')

												<div class="card-body">

														<div class="row">
																<div class="col-6">
																		<x-input-text nama="nama" value="{{ $sekolah->nama }}">
																				Nama Sekolah
																		</x-input-text>
																</div>
																<div class="col-6">
																		<label for="alamat">Alamat Sekolah</label>
																		<textarea name="alamat" id="alamat" rows="2" class="form-control">{{ $sekolah->alamat }}</textarea>
																</div>
																<div class="col-6">
																		<x-input-select nama="provinsi" pilihan="pilih provinsi" label="provinsi">
																				<option value=""></option>
																		</x-input-select>
																</div>
																<div class="col-6">
																		<x-input-select nama="kabupaten" pilihan="pilih kabupaten" label="kabupaten">
																				<option value=""></option>
																		</x-input-select>
																</div>
																<div class="col-6">
																		<x-input-select nama="kecamatan" pilihan="pilih kecamatan" label="kecamatan">
																				<option value=""></option>
																		</x-input-select>
																</div>
																<div class="col-6">
																		<x-input-select nama="kelurahan" pilihan="pilih kelurahan" label="Desa / kelurahan">
																				<option value=""></option>
																		</x-input-select>
																</div>

														</div>
												</div>
												<div class="card-footer">
														<button type="submit" class="btn btn-warning">Update</button>
												</div>
										</form>
								</div>
						</div>
				</div>
		</section>
@endsection




@push('script')
		<script>
				$(document).ready(function() {
						var provinsiSelect = $("#provinsi");
						var kabupatenSelect = $("#kabupaten");
						var kecamatanSelect = $("#kecamatan");
						var kelurahanSelect = $("#kelurahan");

						var selectedProvinsiId = "{{ $sekolah->id_provinsi ?? '' }}";
						var selectedKabupatenId = "{{ $sekolah->id_kabupaten ?? '' }}";
						var selectedKecamatanId = "{{ $sekolah->id_kecamatan ?? '' }}";
						var selectedKelurahanId = "{{ $sekolah->id_kelurahan ?? '' }}";

						// Fetch data provinsi
						$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json", function(provinsiData) {
								$.each(provinsiData, function(key, provinsi) {
										var option = $("<option></option>")
												.attr("value", provinsi.id)
												.text(provinsi.name);
										if (provinsi.id == selectedProvinsiId) {
												option.attr("selected", "selected");
										}
										provinsiSelect.append(option);
								});

								// Setelah provinsi dimuat, fetch data kabupaten berdasarkan provinsi yang dipilih
								fetchKabupaten(selectedProvinsiId, selectedKabupatenId);
						});

						// Event listener untuk perubahan pilihan provinsi
						provinsiSelect.on("change", function() {
								var selectedProvinsiId = $(this).val();
								fetchKabupaten(selectedProvinsiId, ""); // Kosongkan pilihan kabupaten saat provinsi berubah
						});

						// Event listener untuk perubahan pilihan kabupaten
						kabupatenSelect.on("change", function() {
								var selectedKabupatenId = $(this).val();
								fetchKecamatan(selectedKabupatenId, ""); // Kosongkan pilihan kecamatan saat kabupaten berubah
						});

						// Event listener untuk perubahan pilihan kecamatan
						kecamatanSelect.on("change", function() {
								var selectedKecamatanId = $(this).val();
								fetchKelurahan(selectedKecamatanId, ""); // Kosongkan pilihan kelurahan saat kecamatan berubah
						});

						// Fungsi untuk mengambil data kabupaten berdasarkan ID provinsi
						function fetchKabupaten(provinsiId, selectedKabupatenId) {
								if (provinsiId) {
										$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/" + provinsiId + ".json", function(
												kabupatenData) {
												kabupatenSelect.empty(); // Kosongkan opsi kabupaten sebelumnya
												kabupatenSelect.append($("<option></option>").attr("value", "").text("-- pilih kabupaten / kota --"));

												$.each(kabupatenData, function(key, kabupaten) {
														var option = $("<option></option>")
																.attr("value", kabupaten.id)
																.text(kabupaten.name);
														if (kabupaten.id == selectedKabupatenId) {
																option.attr("selected", "selected");
														}
														kabupatenSelect.append(option);
												});

												// Setelah kabupaten dimuat, fetch data kecamatan berdasarkan kabupaten yang dipilih
												fetchKecamatan(selectedKabupatenId, selectedKecamatanId);
										});
								} else {
										kabupatenSelect.empty();
										kabupatenSelect.append($("<option></option>").attr("value", "").text("-- pilih kabupaten / kota --"));
								}
						}

						// Fungsi untuk mengambil data kecamatan berdasarkan ID kabupaten
						function fetchKecamatan(kabupatenId, selectedKecamatanId) {
								if (kabupatenId) {
										$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/districts/" + kabupatenId + ".json", function(
												kecamatanData) {
												kecamatanSelect.empty(); // Kosongkan opsi kecamatan sebelumnya
												kecamatanSelect.append($("<option></option>").attr("value", "").text("-- pilih kecamatan --"));

												$.each(kecamatanData, function(key, kecamatan) {
														var option = $("<option></option>")
																.attr("value", kecamatan.id)
																.text(kecamatan.name);
														if (kecamatan.id == selectedKecamatanId) {
																option.attr("selected", "selected");
														}
														kecamatanSelect.append(option);
												});

												// Setelah kecamatan dimuat, fetch data kelurahan berdasarkan kecamatan yang dipilih
												fetchKelurahan(selectedKecamatanId, selectedKelurahanId);
										});
								} else {
										kecamatanSelect.empty();
										kecamatanSelect.append($("<option></option>").attr("value", "").text("-- pilih kecamatan --"));
								}
						}

						// Fungsi untuk mengambil data kelurahan berdasarkan ID kecamatan
						function fetchKelurahan(kecamatanId, selectedKelurahanId) {
								if (kecamatanId) {
										$.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/villages/" + kecamatanId + ".json", function(
												kelurahanData) {
												kelurahanSelect.empty(); // Kosongkan opsi kelurahan sebelumnya
												kelurahanSelect.append($("<option></option>").attr("value", "").text("-- pilih kelurahan --"));

												$.each(kelurahanData, function(key, kelurahan) {
														var option = $("<option></option>")
																.attr("value", kelurahan.id)
																.text(kelurahan.name);
														if (kelurahan.id == selectedKelurahanId) {
																option.attr("selected", "selected");
														}
														kelurahanSelect.append(option);
												});
										});
								} else {
										kelurahanSelect.empty();
										kelurahanSelect.append($("<option></option>").attr("value", "").text("-- pilih kelurahan --"));
								}
						}
				});
		</script>
@endpush
