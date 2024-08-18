@extends('layouts.app')

@section('title', 'Users')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Learning module sistem </h1>
                <div class="section-header-button">
                    <a href=""
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    
                </div>
            </div>
            <div class="section-body">
                
          

                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <ul class="nav nav-pills">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                           
                                <h4></h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">

                                </div>
                                <div class="float-right">
                                    <form method="GET" action="{{ route('absensi.index') }}">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Nama</th>
                                            <th>Materi</th>
                                            <th>Pemateri</th>
                                            <th>Jadwal</th>
                                            <th>Status</th>
                                            
                                        </tr>

                                       @foreach ($attendances as $attendance)
                                            <tr>
                                            <td>
                                           {{ $attendance->name }}
                                            </td>
                                            <td>
                                           {{ $attendance->materi }}
                                            </td>
                                            <td>
                                            {{ $attendance->pemateri }}
                                            </td>
                                            <td>
                                            {{ $attendance->jadwal }}
                                            </td>
                                            <td>
                                           {{ $attendance->status }}
                                           </td>
                                            <td>
                                                
                                            
                                                        </form>
                                                        <!-- Modal Konfirmasi Penghapusan -->

                                                        <!-- ====== -->
                                                    </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                <div class="float-right">
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
