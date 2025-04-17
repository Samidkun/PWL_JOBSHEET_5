<body>
    <h1>Change User Data Form</h1>
    <a href="{{ route('/user') }}">Back</a>
    <form method="post" action="{{ route('/user/ubah_simpan', $data->user_id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        
        <label>Username</label>
        <input type="text" name="username" value="{{ $data->username}}">
        <br>
        
        <label>Name</label>
        <input type="text" name="nama" value="{{ $data->nama}}">
        <br>
        
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{ $data->level_id }}">
        <br>
        
        <input type="submit" class="btn btn-success" value="ubah">
    </form>
</body>