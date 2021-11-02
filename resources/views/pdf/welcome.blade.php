@extends('layouts.app')
@section('content')
<div>
    <div class="py-4 mx-12">
        <a href="/pdf" class="px-4 py-2 bg-red-500 text-white rounded-md">Generar reporte</a>
        <a href="/excel-export" class="px-4 py-2 bg-green-500 text-white rounded-md">Generar reporte Excel</a>
    </div>
    <div class="mt-4 px-12 text-left">
        <table class="w-full">
            <thead class="bg-gray-400 text-white">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>email</th>
                    <td>entrada</td>
                </tr>
            </thead>
            <tbody>
                @foreach ( $info as $f )
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->name}}</td>
                    <td>{{$f->email}}</td>
                    <td>{{$f->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection