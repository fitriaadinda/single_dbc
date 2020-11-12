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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Manage User</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('manageuser/tambah') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                 <th>No.</th>
                                 <th>Nama</th>
                                 <th>Role</th>
                                 <th>Email</th>
                                 <th>Password</th>
                                 <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($member as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->password }}</td>
                                    <td>
                                        <a href="{{ url('manageuser/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('manageuser/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data ini?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>      
       </div>

   </div>
@endsection