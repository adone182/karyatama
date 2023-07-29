@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Add New Artikel
    
          </h3>
        </div>
        <table>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Terbaru</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Umum</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Populer</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Paling Diminati</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</main>

@endsection