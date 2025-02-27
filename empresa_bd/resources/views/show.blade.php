@extends('layout')

@section('title', 'Personas | ' . $persona->cPerNombre)

@section('content')

    <h2>DETALLE</h2>
    <table>
        <tr>
            <th>Id</th>            
            <th>cPerRnd</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>nPerSueldo</th>
        </tr>
        
    <tr>
        <td>
            {{ $persona->id }}
        </td>
        <td>
            {{ $persona->cPerRnd }}
        </td>
        <td>
             {{ $persona->cPerNombre }}
        </td>
        <td>
            {{ $persona->cPerApellido }}
        </td>
        <td>
            {{ $persona->nPerSueldo }}
        </td>
    </tr>
    </table>
   

@endsection