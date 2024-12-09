@extends('layouts.app')

@section('content')
    <div class="container">

        <button type="button" class="btn btn-primary">
            <a href="add-input" class="text-white text-decoration-none">Add</a>
        </button>
        <div class="d-flex justify-content-center">

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Input1</th>
                        <th scope="col">input2</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>


                    @forelse ($UserInput as $userInput)
                        <tr>
                            <td>{{ $userInput->id }}</td>
                            <td>{{ $userInput->input_1 }}</td>
                            <td>{{ $userInput->input_2 }}</td>

                            <td>
                                <a class="text-decoration-none badge text-bg-primary"
                                    href="{{ route('result', $userInput->id) }}">hasil</a>
                                <a class="text-decoration-none badge text-bg-warning"
                                    href="{{ route('userinput.edit', $userInput->id) }}">Edit</a>

                                <form action="{{ route('delete-input', $userInput->id) }}" method="POST"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge text-bg-danger"
                                        onclick="return confirm('Hapus data?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-danger fst-italic">DATA TIDAK DI TEMUKAN</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>


        </div>

    </div>
@endsection
