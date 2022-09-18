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
                            <li class="breadcrumb-item active" aria-current="page">Joki</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Tabel Master Joki  <a href="{{ route('tambah_joki') }}" class="btn btn-primary" style="float: right;width: 100px;height: 30px;font-size: 12px;text-transform: uppercase">Buat Joki</a></h6>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
								<table id="example" class="table" style="width:100%">
									<thead>
										<tr>
                                            <th>No</th>
											<th>Name Joki</th>
											<th>Deskripsi</th>
											<th>Harga</th>
                                            <th>Aksi</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($datajoki as $item)
                                        <tr>
                                            <td style="width:5%;">{{ $a++ }}</td>
											<td>{{ $item->nama_joki }}</td>
											<td>{!! $item->deskripsi !!}</td>
											<td>{{ $item->harga }}</td>
                                            <td style="width: 10%">
                                                <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                  <li><a class="dropdown-item" href="{{ route('ubah_joki', $item->slug) }}">Ubah Joki</a></li>
                                                  <li><a id="hapus-joki" data-id="{{ $item->id }}" data-slug="{{ $item->slug }}" class="dropdown-item" href="#">Hapus Joki</a></li>
                                                </ul>
                                              </div>
                                            </td>
										</tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
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