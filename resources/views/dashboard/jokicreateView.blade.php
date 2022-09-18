@extends('layout.dashboard')

@section('container')

<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="ps-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0" style="left: 0;">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt" style="color: green"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Joki</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Form Master Joki</h6>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('joki_store') }}" method="post">
                                @csrf
                                <div class="col-12 mb-2">
                                    <div class="form-label">Nama Joki</div>
                                    <input class="form-control" name="nama_joki" type="text" placeholder="Default input" aria-label="default input example" value="{{ old('nama_joki') }}">
                                </div>

                                <div class="col-12 mb-4">
                                    <div class="form-label">Deskripsi</div>
                                    <textarea name="deskripsi" class="my-editor form-control" id="my-editor" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                                </div>

                                <div class="col-12 mb-4">
                                    <div class="form-label">Harga</div>
                                    <input id="rupiah" class="form-control" name="harga" type="text" placeholder="Default input" aria-label="default input example" value="{{ old('harga') }}">
                                </div>
                                
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>


</div>

@endsection