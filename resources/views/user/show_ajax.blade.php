@empty($user)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i>Error!!!</h5>
                    User data was not found.
                </div>
                <a href="{{ url('/user') }}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>
@else
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Data Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="alert alert-info">
                    <h5><i class="icon fas fa-info-circle"></i> Information</h5>
                    Here are the details of the selected user data.
                </div>

                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th class="text-right col-4">Username:</th>
                        <td class="col-8">{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th class="text-right col-4">Name:</th>
                        <td class="col-8">{{ $user->nama }}</td>
                    </tr>
                    <tr>
                        <th class="text-right col-4">Level:</th>
                        <td class="col-8">{{ $user->level->level_nama }}</td>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
@endempty