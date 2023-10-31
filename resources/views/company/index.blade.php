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

            <form action="{{ url('/prd-post') }}" method="POST" class="create-prd">
                @csrf
                @method('post')

                <div class="mb-3 form-group">
                    <label for="company_name" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="company_name" id="company_name"
                        placeholder="PT. Kusuma Bakti">
                </div>
                <h5>Narahubung (CP)</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3 form-group">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="cp_name" id="Nama" placeholder="Jhon Doe">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="cp_email" id="email"
                                placeholder="jhond@gmail.com">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 form-group">
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
                    {{-- <label for="target" class="form-label">Target Pasar (Konsumen)</label>
                    <input type="text" class="form-control" name="target_users" id="target"> --}}

                    <table class="table table-bordered" id="dynamicAddRemove1">
                        <tr>
                            <th>Target Pasar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="target[0][target]" placeholder="Masukkan Target"
                                    class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="target[0][desc]" placeholder="Masukkan Deskripsi"
                                    class="form-control" />
                            </td>
                            <td><button type="button" name="add" id="dynamic-ar1"
                                    class="btn btn-outline-primary">Tambah
                                    Fitur</button></td>
                        </tr>
                    </table>
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
                    <label for="dateline" class="form-label">Deadline </label>
                    <input class="form-control form-control-md " id="dateline" name="deadline">
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

        var j = 0;
        $("#dynamic-ar1").click(function() {
            ++j;
            $("#dynamicAddRemove1").append('<tr><td><input type="text" name="target[' + j +
                '][target]" placeholder="Masukkan Target" class="form-control" /></td><td><input type="text" name="target[' +
                j +
                '][desc]" placeholder="Masukkan Deskripsi" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field1">Hapus</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field1', function() {
            $(this).parents('tr').remove();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            $(".create-prd").validate({
                rules: {
                    company_name: {
                        required: true,
                    },
                    cp_name: {
                        required: true,
                    },
                    cp_email: {
                        required: true,
                        email: true,
                    },
                    cp_phone: {
                        required: true,
                    },
                },
                messages: {
                    company_name: {
                        required: "Nama perusahaan harus diisi",
                    },
                    cp_name: {
                        required: "Nama Narahubung harus diisi",

                    },
                    cp_email: {
                        required: "Email Narahubung harus diisi",
                        email: "Alamat email harus valid",
                    },
                    cp_phone: {
                        required: "Nomor Narahubung harus diisi",

                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endpush
