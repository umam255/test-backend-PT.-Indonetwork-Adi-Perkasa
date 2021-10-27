@extends('welcome')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="card uper">
        <div class="card-header">
            Add Companies Data
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('companies.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    <label for="membership_type">Membership Type :</label>
                    <select class="form-control" name="membership_type" aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status :</label>
                    <select class="form-control" name="status" aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="row">
                    <div class="ml-3">
                        <button type="submit" class="btn btn-primary">Add Data</button>
                    </div>
                    <div class="ml-2">
                        <a href="{{ route('companies.index') }}" type="button" class="btn btn-md btn-warning">Back</a>
                    </div>
                </div>
        </div>

        </form>
    </div>
    </div>
@endsection
