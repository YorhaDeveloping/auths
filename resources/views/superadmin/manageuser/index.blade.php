@extends('layouts.superadmin_app')

@section('content')
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        .div-container {
            width: 100%;
            height: 92.5vh;
            background-color: #f5f5f5;
        }

        .table-container{
            display: flex;
            justify-content: center;
            padding: 100px;
        }

        table {
            border: 1px solid #404040;
            border-radius: 15px;
            border-spacing: 0;
            overflow: hidden;
            width: 90%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: none;
            padding: 8px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        th {
            background-color: #404040;
            color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #e6e6e6;
        }

    </style>
    <div class="div-container">
        <div class="box-container">
            <div class="table-container">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('usermanage.edit', $user->id) }}"><button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Edit</button></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
