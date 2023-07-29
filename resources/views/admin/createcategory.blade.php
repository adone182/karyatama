@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Add New Category
    
          </h3>
        </div>
        <form action="{{route ('admin.createcategory')}} " enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name_category" class="form-label @error('name_category') is-invalid @enderror">Name Category</label>
                <input class="form-control" type="string" id="name_category" name="name_category" required>
                @error('name_category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah Category</button>
                <a href="" class="btn btn-danger">Kembali</a>
            </div>
        </form>
        
    </div>
</main>

@endsection