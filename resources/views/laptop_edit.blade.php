
@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Alternatif</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('laptop.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="seri_laptop">Seri Laptop</label>
                    <input type="text" class="form-control" id="seri_laptop" name="seri_laptop" value="{{ $datas->seri_laptop }}">
                </div>
                <div class="form-group">
                    <label for="processor">Processor clock speed (Ghz)</label>
                    <input type="text" class="form-control" id="processor" name="processor" value="{{ $datas->processor }}">
                </div>
                <div class="form-group">
                    <label for="ram">RAM size (megabyte)</label>
                    <input type="text" class="form-control" id="ram" name="ram" value="{{ $datas->ram }}">
                </div>
                <div class="form-group">
                    <label for="vga">VGA size (megabyte)</label>
                    <input type="text" class="form-control" id="vga" name="vga" value="{{ $datas->vga }}">
                </div>
                <div class="form-group">
                    <label for="storage">Storage size (gigabyte)</label>
                    <input type="text" class="form-control" id="storage" name="storage" value="{{ $datas->storage }}">
                </div>
                <div class="form-group">
                    <label for="battery">Battery capacity (mah)</label>
                    <input type="text" class="form-control" id="battery" name="battery" value="{{ $datas->battery }}">
                </div>
                <div class="form-group">
                    <label for="price">Harga (rupiah)</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $datas->price }}">
                </div>
                <div class="form-group">
                    <label for="weight">Berat (gram)</label>
                    <input type="text" class="form-control" id="weight" name="weight" value="{{ $datas->weight }}">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button href="laptop" class="btn btn-danger">cancel</button>
                    
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
