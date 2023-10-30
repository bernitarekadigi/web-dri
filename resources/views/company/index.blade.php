@extends('layouts.app')

@section('contain')

    <div class=" bg-white  ">
        <div class="container">

            <div class="mt-10 text-white">
                <h3>Dokumen Persyaratan Produk</h3>
                <small>Product Requirements Document (PRD)</small>
                <p>Dokumen terstruktur yang menguraikan persyaratan dan spesifikasi untuk suatu produk atau fitur.</p>
            </div>
            <div class="mt-10">
                <h3>Dokumen Persyaratan Produk</h3>
                <small>Product Requirements Document (PRD)</small>
                <p>Dokumen terstruktur yang menguraikan persyaratan dan spesifikasi untuk suatu produk atau fitur.</p>
            </div>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            <form action="{{ url('/prd-post') }}" method="POST">
                @csrf
                @method('post')

                <div class="mb-3">
                    <label for="company_name" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="company_name" id="company_name"
                        placeholder="PT. Kusuma Bakti">
                </div>
                <h5>Narahubung (CP)</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="cp_name" id="Nama" placeholder="Jhon Doe">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="cp_email" id="email"
                                placeholder="jhond@gmail.com">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="cp_phone" id="phone"
                                placeholder="+628323212332">
                        </div>
                    </div>
                </div>

                <h5>Produk</h5>
                <div class="mb-3">
                    <label for="Produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="product" id="Produk" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label for="goals" class="form-label">Tujuan Produk</label>
                    <textarea class="form-control" name="goals" id="goals" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="target" class="form-label">Target Pasar (Konsumen)</label>
                    <input type="text" class="form-control" name="target_users" id="target">
                </div>
                <div class="mb-3">
                    <label for="require_product" class="form-label">Kebutuhan</label>
                    <textarea class="form-control" name="require_product" id="require_product" rows="3"></textarea>
                </div>


                <table class="table table-bordered" id="dynamicAddRemove">
                    <tr>
                        <th>Fitur</th>
                        <th>Deskripsi Fitur</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="feature[0][fitur]" placeholder="Masukkan Fitur"
                                class="form-control" />
                        <td>
                            <input type="text" name="feature[0][desc]" placeholder="Masukkan Deskripsi"
                                class="form-control" />
                        <td><input type="text" name="feature[0][value]" placeholder="Masukkan Nilai"
                                class="form-control" />
                        </td>
                        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah
                                Fitur</button></td>
                    </tr>
                </table>

                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" name="deadline" id="deadline">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Catatan</label>
                    <textarea class="form-control" name="note" id="note" rows="3"></textarea>
                </div>
                <hr>
                <div class="pb-5 d-grid">
                    <button type="submit" class="btn btn-outline-success btn-block"> Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="feature[' + i +
                '][fitur]" placeholder="Masukkan Fitur" class="form-control" /></td><td><input type="text" name="feature[' +
                i +
                '][desc]" placeholder="Masukkan Deskripsi" class="form-control" /></td><td><input type="text" name="feature[' +
                i +
                '][value]" placeholder="Masukkan Nilai" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Hapus</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endpush
