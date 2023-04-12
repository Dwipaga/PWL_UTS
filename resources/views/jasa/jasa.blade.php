@extends('layouts.template')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Jasa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <a href="{{url('jasa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Kode Jasa</th>
              <th>Jenis Jasa</th>
              <th>Nama Jasa</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if($js->count() > 0)
              @foreach($js as $i => $j)
                <tr>
                  <td>{{++$i}}</td>
                  <td>{{$j->kode_jasa}}</td>
                  <td>{{$j->jenis_jasa}}</td>
                  <td>{{$j->nama_jasa}}</td>
                  <td>{{$j->harga}}</td>
                  <td>
                    <!-- Bikin tombol edit dan delete -->
                    <a href="{{ url('/jasa/'. $j->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                    <form method="POST" action="{{ url('/jasa/'.$j->id) }}" >
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            @else
              <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
            @endif
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
      <div class="row">
        <div class="col-md-12">
          {{$js->links() }}
        </div>
      </div>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
@endsection
@push('custom_js')
<script>
</script>
@endpush