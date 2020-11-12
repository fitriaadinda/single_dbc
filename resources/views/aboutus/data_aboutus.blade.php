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
                       <li class="active"><i class="fa fa-dashboard"></i></li>
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

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit odio velittis non sem.</div>
                    <div class="pull-right">
                        <a href="{{ url('aboutus/tambah') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($aboutus as $item)
                                <tr>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <a href="{{ url('aboutus/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('aboutus/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data ini?')">
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