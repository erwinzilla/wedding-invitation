<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erwin & Fahny Management</title>

    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/logo.png') }}">

    <!-- CSS only -->
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/css/wedding.css?v=2') }}">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Parisienne&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body>
<div class="container-fluid">
    <ul class="nav nav-pills nav-fill my-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-approve-tab" data-bs-toggle="pill" data-bs-target="#pills-approve" type="button" role="tab" aria-controls="pills-approve" aria-selected="false">Approve Wish</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="mb-4">
                <h3 class="fw-bold">Konfirmasi Undangan</h3>
                <table class="table">
                    <tr>
                        <td>Yang Mengisi Kehadiran</td>
                        <td>:</td>
                        <td>{{ $data->count() }}</td>
                    </tr>
                    <tr>
                        <td>Yang Akan Datang</td>
                        <td>:</td>
                        <td>{{ $param['hadir']  }}</td>
                    </tr>
                    <tr>
                        <td>Yang Mungkin Datang</td>
                        <td>:</td>
                        <td>{{ $param['mungkin']  }}</td>
                    </tr>
                    <tr>
                        <td>Yang Tidak Datang</td>
                        <td>:</td>
                        <td>{{ $param['tidak']  }}</td>
                    </tr>
                </table>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#attendance">Lihat Selengkapnya</button>
                <hr>
            </div>
            <div class="mb-3">
                <h3 class="fw-bold">Do'a Tamu Undangan</h3>
                <table class="table">
                    <tr>
                        <td>Total Do'a</td>
                        <td>:</td>
                        <td>{{ $data2->count() }}</td>
                    </tr>
                    <tr>
                        <td>Approved</td>
                        <td>:</td>
                        <td>{{ $param['approve'] }}</td>
                    </tr>
                    <tr>
                        <td>Pending / Rejected</td>
                        <td>:</td>
                        <td>{{ $param['pending'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-approve" role="tabpanel" aria-labelledby="pills-approve-tab-tab">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name & Do'a</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data2 as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <b>{{ $row->name }}</b>
                            <br>{{ $row->wish }}
                            @if($row->approve)
                                <br><span class="badge bg-primary">Approved</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                @if(!$row->approve)
                                    <form action="{{ url('wedding/manage/'.$row->id) }}" method="post" class="me-1">
                                        @method('put')
                                        @csrf
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-check2-square"></i></button>
                                    </form>
                                @endif
                                <form action="{{ url('wedding/manage/'.$row->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-secondary"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Gift modal -->
<div class="modal fade" id="attendance" tabindex="-1" aria-labelledby="attendance" aria-hidden="true" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title">Daftar Kehadiran</span>
            </div>
            <div class="modal-body text-primary">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Kehadiran</th>
                        <th>Orang</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($data->count() > 0)
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <b>{{ $row->name }}</b>
                                    <br>
                                    <small>
                                        @if(strlen($row->address) > 50)
                                            {{ substr($row->address, 0, 50) }}...
                                        @else
                                            {{ $row->address }}
                                        @endif
                                    </small>
                                </td>
                                <td>
    {{--                                tidak akan datang--}}
                                    @if($row->coming == 0)
                                        <span class="badge bg-gray">Tidak Hadir</span>
                                    @endif
    {{--                                akan datang--}}
                                    @if($row->coming == 1)
                                        <span class="badge bg-primary">Hadir</span>
                                    @endif
    {{--                                mungkin--}}
                                    @if($row->coming == 2)
                                        <span class="badge bg-secondary">Mungkin</span>
                                    @endif
                                </td>
                                <td>
                                    {{ $row->qty }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">Belum ada data</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary w-100 fw-bold" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
            </div>
        </div>
    </div>
</div>

@if(session('status'))
    <script>
        // setting alert
        let alert = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary btn-lg text-white',
                cancelButton: 'btn btn-default btn-lg',
                popup: 'card',
                title: 'text-default'
            },
            buttonsStyling: false
        });

        document.addEventListener("DOMContentLoaded", function() {
            //show alert
            alert.fire({
                title: '{{ ucwords(session('status')) }}',
                text: '{{ session('message') }}',
                icon: '{{ session('status') }}',
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false
            })
        })
    </script>
@endif
</body>
</html>
