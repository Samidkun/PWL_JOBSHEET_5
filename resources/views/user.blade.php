<body>
    <h1>Data User</h1>
    <a href="{{ route('user.tambah') }}">Add User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            {{-- <th>Jumlah Pengguna</th> --}}
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>User Level</th>
            <th>Level Code</th>
            <th>Level Name</th>
            <th>Action</th>
            
            



        </tr>
        @foreach ($data as $d)
        <tr>
            {{-- <td>{{ $count }}</td> --}}
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
            <td>{{ $d->level->level_kode }}</td>
            <td>{{ $d->level->level_nama }}</td>
            <td><a href="{{ route('user.ubah', $d->user_id) }}">Change</a> | <a href="{{ route('user.hapus', $d->user_id) }}">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
