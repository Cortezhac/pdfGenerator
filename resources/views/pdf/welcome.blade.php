@extends('layouts.app')
@section('content')
<div>
    <div class="py-4 mx-12">
        <a href="/pdf" class="px-4 py-2 bg-red-500 text-white rounded-md">Generar reporte</a>
    </div>
    <div class="mt-4 px-12 text-left">
        <table class="w-full">
            <thead class="bg-gray-400 text-white">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $info as $f )
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->name}}</td>
                    <td>{{$f->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection