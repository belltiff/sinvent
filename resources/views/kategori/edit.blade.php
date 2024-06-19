@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('kategori.update',$rsetKategori->id) }}" method="POST" enctype="multipart/form-data">                    
                            @csrf
                            @method('PUT')
                            <div class="pull-right ">
                                <a class="btn btn-primary" href="{{ route('kategori.index') }}"> Back</a>
                            </div>
                        
                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="deskripsi" value="{{ old('kategori',$rsetKategori->kategori) }}" placeholder="Masukkan Deskripsi Barang">
                            
                                <!-- error message untuk nama -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" class="form-control">
                                    @foreach($akategori as $key => $value)
                                        <option value="{{ $key }}" {{ $rsetKategori->kategori == $key ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>



                            
                        
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>

 

            </div>
        </div>
    </div>
@endsection