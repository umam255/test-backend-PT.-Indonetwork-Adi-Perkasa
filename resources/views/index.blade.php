@extends('welcome')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="uper">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="mb-5">
            <H4>Data Companies</H4>
        </div>
        <div class="mb-2">
            <a href="{{ route('companies.create') }}" type="button" class="btn btn-md btn-success">Add Data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Companies Name</td>
                    <td>Memberhip Type</td>
                    <td>Status</td>
                    <td>Updated at</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                @foreach ($data as $case)
                    <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $case->name }}</td>
                        <td>{{ $case->membership_type }}</td>
                        <td>{{ $case->status }}</td>
                        <td>{{ $case->updated_at }}</td>
                        <td><a href="{{ route('companies.edit', $case->id) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('companies.destroy', $case->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="float-right">
            {{ $data->links() }}
        </div>
        <div>
        @endsection
