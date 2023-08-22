@extends('admin.layouts.template')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Registered Users</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <input type="text" class="float-right" id="searchInput" placeholder="Search here..."
                                oninput="filterTable()">
                            <table class="table table-striped table-hover" id="dataTable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>created date</th>
                                        <th>status</th>
                                        <th>last seen</th>
                                        <th class="text-center">Banned/UnBanned</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginatedUsers as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @foreach ($item->roles as $role)
                                                    {{ $role->name }}
                                                @endforeach
                                            </td>
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td>
                                                @if (Cache::has('is_online' . $item->id))
                                                    <span class="py-2 px-3 badge btn-success">Online</span>
                                                @else
                                                    <span class="py-2 px-3 badge btn-warning">Offline</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}</td>
                                            <td class="text-center">
                                                @if ($item->isban == '0')
                                                    <label class="py-2 px-3 badge btn-primary">Not Banned</label>
                                                @elseif ($item->isban == '1')
                                                    <label class="py-2 px-3 badge btn-danger"> Banned</label>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ url('user-delete/' . $item->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this user?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ url('role-edit/' . $item->id) }}"
                                                        class="badge badge-pill btn-primary px-3 py-2">Edit</a>
                                                    <button type="submit"
                                                        class="badge badge-pill btn-danger px-3 py-2">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <style>
                                .red-text {
                                    color: red;
                                }
                            </style>
                            <div id="noMatchingRecords" class="red-text" style="display: none; text-align: center;">No more
                                matching records found
                            </div>

                            <div class="float-left">
                                <p>
                                    Showing entries {{ $paginatedUsers->firstItem() }} to
                                    {{ $paginatedUsers->lastItem() }}
                                    of {{ $paginatedUsers->total() }}
                                </p>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        {{ $paginatedUsers->links('pagination::bootstrap-4') }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <script>
    function filterTable() {
        var input, filter, table, tr, td, i, j, txtValue, found;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        found = false;

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    found = true;
                    break;
                } else {
                    tr[i].style.display = "none";
                    found = false;
                }
            }
        }

        if (!found) {
            document.getElementById("noRecords").style.display = "block";
        } else {
            document.getElementById("noRecords").style.display = "none";
        }
    }
</script> --}}
<script>
    function filterTable() {
        var input, filter, table, tr, td, i, j, txtValue, found;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        found = false;

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    found = true;
                    break;
                } else {
                    tr[i].style.display = "none";
                    found = false;
                }
            }
        }

        if (!found) {
            document.getElementById("noMatchingRecords").style.display = "block";
        } else {
            document.getElementById("noMatchingRecords").style.display = "none";
        }
    }
</script>




@if (session('success'))
    <script>
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 3000); // 5000 milliseconds = 5 seconds
    </script>
@endif
