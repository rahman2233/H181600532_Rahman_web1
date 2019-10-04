 @extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list kategori artikel</div> 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-succes" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif

                    <table border='2'>
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>user_id</td>
                            <td>create</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listkategoriArtikel as $item)
                        <tr>
                            <td>{!! $item->id !!}</td> 
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->user _at!!}</td>
                            <td>{!! $item->created at!!}</td>
                            <td>{!! $item->updated_at!!}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>  
            </div>
        </div>
    </div>                         

                         
                 