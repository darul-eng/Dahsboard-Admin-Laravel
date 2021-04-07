@extends('layout.main')

@section('title', 'Students')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Students</h1> --}}

            {{-- content --}}
            <div class="container">
              <div class="row">
                <div class="col-8">
                  <h1 class="mt-3">Form Edit Student</h1>

                  <form method="POST" action="/students/{{ $student->id }}">
                      @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama">Name</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Your Name" name="nama" value="{{ $student->nama }}">
                      
                      @error('nama')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="NIM" name="nim" value="{{ $student->nim }}">

                      @error('nim')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ $student->email }}">

                      @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Departement</label>
                      <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Departement" name="jurusan" value="{{ $student->jurusan }}">

                      @error('jurusan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Student</button>
                  </form>

                </div>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection