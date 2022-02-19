@extends('admin.adminpanel')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>

                </h2>
            </div>
            <div class="pull-right mt-2 mb-2">
                <a class="btn btn-success" href="{{ route('cosmatics.create') }}"> Create New Cosmetic</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered " id="example">
        <thead>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>description</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($cosmetics as $cosmetic)
            <tbody>
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/image/cosmetic/{{ $cosmetic->image }}" width="100px"></td>
                <td>{{ $cosmetic->name }}</td>
                <td>{{ $cosmetic->description }}</td>
                <td>
                    <form action="{{ route('cosmatics.destroy',$cosmetic->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('cosmatics.show',$cosmetic->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('cosmatics.edit',$cosmetic->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tbody>
    </table>

    {!! $cosmetics->links() !!}

{{--    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('#example').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
