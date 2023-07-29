@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Add New Artikel
    
          </h3>
        </div>
        <form action="{{route ('admin.createartikel')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug">
            </div>
            <div class="form-group">
                <label>Kategori Artikel</label>
                <select name="categories_id" class="form-control">
                    @foreach ($categori as $item)
                      <option value={{$item->id}}>{{$item->name_category}}</option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
            </div>
            <div class="form-group">
                <label>Deskripsi Body</label>
                <textarea name="half_body" id="editor1" class="textarea" placeholder="Place some text here" maxlength="123"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                <a href="" class="btn btn-danger">Kembali</a>
            </div>
        </form>
        
    </div>
</main>

@endsection