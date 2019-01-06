@extends('base') {{-- mengambil file base.blade.php --}}
@section('content') {{-- Mengisi di bagian content --}}
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tujuan Penggunaan Laptop</h1>
            <form method="post" action="/kriteria">
            {{ csrf_field() }}
            <div class="form-check">
                <div class="radio">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="kriteria" value="1" checked>
                    Kuliah (Browsing internet, menggunakan office, dll).
                    </label>
                </div>
                <div class="radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kriteria" value="2">
                Programming (Website, android, desktop application, dll). 
              </label>
              </div>
              <div class="radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kriteria" value="3">
                Graphic Design (Photoshop, Illustrator, Coreldraw, dll).
              </label>
              </div>
              <div class="radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kriteria" value="4">
                Gaming (Game offline, game online, dll).
              </label>
              </div>
              <div class="radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kriteria" value="5">
                Kantor (Ms Office, browsing, email, dll).
              </label>
              </div>
              <div class="radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kriteria" value="6">
                3D Design (Blender, Cinema4d, Alice 3, dll).
              </label>
              </div>
              <div class="radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kriteria" value="7">
                Video editing, Movie making
              </label>
              </div>
              <button type="submit" class="btn btn-success">Nilai</button>
              
            </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection