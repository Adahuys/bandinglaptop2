
@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Alternative</h1>
            <hr>
            <form action="{{ route('laptop.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="seri_laptop">seri laptop:</label>
                    <input type="text" class="form-control" id="seri_laptop" name="seri_laptop" required>
                </div>
                <div class="form-group">
                    <label for="processor">clockspeed(ghz):</label>
                    <input type="text" class="form-control" id="processor" name="processor" required>
                </div>
                <div class="form-group">
                    <label for="ram">RAM (MB):</label>
                    <input type="text" class="form-control" id="ram" name="ram" required>
                </div>
                <div class="form-group">
                    <label for="vga">VGA (MB):</label>
                    <input type="text" class="form-control" id="vga" name="vga" required>
                </div>
                <div class="form-group">
                    <label for="storage">storage (GB):</label>
                    <input type="text" class="form-control" id="storage" name="storage" required>
                </div>
                <div class="form-group">
                    <label for="battery">battery (mah):</label>
                    <input type="text" class="form-control" id="battery" name="battery" required>
                </div>
                <div class="form-group">
                    <label for="price">price (rupiah):</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="weight">weight (gram):</label>
                    <input type="text" class="form-control" id="weight" name="weight" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    <!--<button href="laptop" class="btn btn-secondary">cancel</button>-->
                    <input type="reset" class="btn btn-danger float-right">
                </div>
            </form>
            
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
