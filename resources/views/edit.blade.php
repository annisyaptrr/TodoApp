@extends('layout')

@section('content')

    <form action="/update/{{$todo['id']}}" method="post" style="max-width: 500px; margin: auto;">
        {{-- menampilkan alert ketika validasi menghasilkan error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- mengirim data ke controller yg ditampung oleh Request $request --}}
        @csrf
        {{-- karena attribute method pada tag form cmn bisa GET/POST sedangkan buat update data itu pake method PATCH, jadi method="post" di form di timpa sama method patch ini --}}
        @method('PATCH')
        <div class="d-flex flex-column">
            <label>Title</label>
            {{-- attribute value berfungsi untuk menampilkan data di inputnya. data yang ditampilin merupakan data yang diambil di controller dan dikirim lewat compact tadi --}}
            <input type="text" name="title" value="{{$todo['title']}}">
        </div>
        <div class="d-flex flex-column">
            <label>Date</label>
            <input type="date" name="date" value="{{$todo['date']}}">
        </div>
        <div class="d-flex flex-column">
            <label>Description</label>
            {{-- kenapa textarea gapunya attribute value? karena textarea bukan termasuk tag input/select dan dia punya penutup tag, jadi buat nampilinnya langsung tanpa attribute value (sebelum penutup tag textarea) --}}
            <textarea name="description" cols="30" rows="10">{{$todo['description']}}</textarea>
        </div>
        <button type="submit">Kirim</button>
    </form>
@endsection