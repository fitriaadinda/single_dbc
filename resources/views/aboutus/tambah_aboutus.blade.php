@extends('main')

@section('title', 'About Us')

@section('breadcrumbs')
   <div class="breadcrumbs">
       <div class="col-sm-4">
           <div class="page-header float-left">
               <div class="page-title">
                   <h1>About Us Company</h1>
               </div>
           </div>
       </div>
       <div class="col-sm-8">
           <div class="page-header float-right">
               <div class="page-title">
                   <ol class="breadcrumb text-right">
                       <li><a href="#">About Us</a></li>
                       <li class="active">Tambah</li>
                   </ol>
               </div>
           </div>
       </div>
   </div>
@endsection

@section('content')
   <div class="content mt-3">

       {{-- <div class="animated fadeIn">
           Isi home
       </div> --}}

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit odio velittis non sem.</div>
                    <div class="pull-right">
                        {{-- <button type="submit" class="btn btn-success">Simpan</button> --}}
                        <a href="{{ url('aboutus') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Batal
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('aboutus') }}" method="POST"}}>
                                @csrf
                                <div class="form-group">
                                    <label>Tambahkan Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Tambah deskripsi...">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection