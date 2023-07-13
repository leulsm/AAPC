@extends('admin.layouts.template')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Registered Users - Edit</h4>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4>Current Role: {{ $user_roles->first()->name }}</h4>
                        <h5>Banning status:
                            @if ($user->isban == '0')
                                <label class="py-2 px-3 badge btn-primary">Not Banned</label>
                             @elseif ($user->isban == '1')
                                <label class="py-2 px-3 badge btn-danger"> Banned</label>
                            @endif
                        </h5>
                        <form action="{{ url('role-update/' . $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" readonly
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <select name="roles" class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">Employee</option>
                                    <option value="director">Director</option>
                                    <option value="expert">Expert</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="isban" class="form-control">
                                    <option value="">--Change Banning status--</option>
                                    <option value="0">Un-Ban</option>
                                    <option value="1">Ban </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@if (session('status'))
    <script>
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 3000); // 5000 milliseconds = 5 seconds
    </script>
@endif
