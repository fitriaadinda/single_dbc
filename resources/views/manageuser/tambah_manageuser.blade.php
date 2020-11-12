@extends('main')

@section('title', 'Manage User')

@section('breadcrumbs')
   <div class="breadcrumbs">
       <div class="col-sm-4">
           <div class="page-header float-left">
               <div class="page-title">
                   <h1>Manage User</h1>
               </div>
           </div>
       </div>
       <div class="col-sm-8">
           <div class="page-header float-right">
               <div class="page-title">
                   <ol class="breadcrumb text-right">
                       <li><a href="#">Manage User</a></li>
                       <li class="active">Data</li>
                   </ol>
               </div>
           </div>
       </div>
   </div>
@endsection

@section('content')
   <div class="content mt-3">

       <div class="animated fadeIn">
           
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Manage User</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('manageuser') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Batal
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('manageuser') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Masukkan nama" autofocus>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Masukkan title" autofocus>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role') }}" placeholder="Masukkan role" autofocus>
                                    @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan email" autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nomor telepon</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Masukkan line" autofocus>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Link Room</label>
                                    <input type="text" name="link_room" class="form-control @error('link_room') is-invalid @enderror" value="{{ old('link_room') }}" placeholder="Masukkan link room" autofocus>
                                    @error('link_room')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}" placeholder="Masukkan instagram" autofocus>
                                    @error('instagram')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>LinkedIn</label>
                                    <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" value="{{ old('linkedin') }}" placeholder="Masukkan linkedin" autofocus>
                                    @error('kinkedin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Line</label>
                                    <input type="text" name="line" class="form-control @error('line') is-invalid @enderror" value="{{ old('line') }}" placeholder="Masukkan line" autofocus>
                                    @error('line')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Masukkan password" autofocus>
                                    @error('password')
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