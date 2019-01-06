
@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Laptop</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                <th>No.</th>
                    <th>Seri Laptop</th>
                    <th>Processor clockspeed</th>
                    <th>RAM</th>
                    <th>VGA</th>
                    <th>Storage</th>
                    <th>Baterai</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                    <td>{{ $no++ }}</td>
                        <td>{{ $datas->seri_laptop }}</td>
                        <td>{{ $datas->processor }}</td>
                        <td>{{ $datas->ram }}</td>
                        <td>{{ $datas->vga }}</td>
                        <td>{{ $datas->storage }}</td>
                        <td>{{ $datas->battery }}</td>
                        <td>{{ $datas->price }}</td>
                        <td>{{ $datas->weight }}</td>
                        <td>
                            <form action="{{ route('laptop.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('laptop.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="container">
                <a class="btn btn-primary" href="{{ route('laptop.create') }}">Tambah data</a>
                <a href="kriteria" class="btn btn-success float-right">Lakukan Perbandingan</a>
            </div>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
