@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('anggota.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Siswa baru</h4>
                      
                        <div class="form-group{{ $errors->has('absen') ? ' has-error' : '' }}">
                            <label for="absen" class="col-md-4 control-label">Absen</label>
                            <div class="col-md-6">
                                <input id="absen" type="number" class="form-control" name="absen" value="{{ old('absen') }}" required>
                                @if ($errors->has('absen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('absen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                            <label for="nis" class="col-md-4 control-label">NIS</label>
                            <div class="col-md-6">
                                <input id="nis" type="number" class="form-control" name="nis" value="{{ old('nis') }}" maxlength="8" required>
                                @if ($errors->has('nis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            <label for="kelas" class="col-md-4 control-label">Kelas</label>
                            <div class="col-md-6">
                                <input id="kelas" type="text" class="form-control" name="kelas" value="{{ old('kelas') }}" required>
                                @if ($errors->has('kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" id="submit">
                                    Buat
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('anggota.index')}}" class="btn btn-light pull-right">Kembali</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection