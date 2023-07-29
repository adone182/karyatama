@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">View Artikel
    
          </h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead style="text-align: center">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Nama Kategori</th>
                        <th>Author</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    @foreach ($artikel as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->judul}}</td>
                        {{-- @if($item->gambar==null)
                        <td>Gambar Tidak Ada</td>
                        @else --}}
                        <td>  <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image Null" title="" style="width: 200px"></td>
                         {{-- @endif --}}
                        <td>{{$item->categories_id}}</td>
                        <td>{{$item->author}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{ route('admin.editartikel',$item->id) }}" class="btn btn-info">Edit</a>
    
                            <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger">
                                <span class="fa fa-trash">Delete</span>
                                <form action="{{route ('admin.viewartikel', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                        </td>
                    </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
        
    </div>
</main>

@endsection