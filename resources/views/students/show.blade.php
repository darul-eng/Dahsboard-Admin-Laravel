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

          <div class="container">
            <div class="row">
              <div class="col-6">
                <h1 class="mt-3">Detail Student</h1>

                <div class="card mt-3">
                  <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-text mb-2 text-muted">{{ $student->nim }}</h6>
                    <h6 class="card-text mb-2">{{ $student->email }}</h6>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="card-link">Back</a>
                  </div>
                </div>
                
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