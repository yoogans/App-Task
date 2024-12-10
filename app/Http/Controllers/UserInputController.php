<?php

namespace App\Http\Controllers;

use App\Models\UserInput;
use Illuminate\Http\Request;

class UserInputController extends Controller
{

    public function index()
    {
        $UserInput = UserInput::all();
        return view('user-input', compact('UserInput'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'input_1' => 'required|string',
            'input_2' => 'required|string'
        ]);

        $UserInput = UserInput::create([
            'input_1' => $request->input('input_1'),
            'input_2' => $request->input('input_2'),
        ]);

        $persentase = $UserInput->hitungPersentase();

        return view('result', compact('persentase', 'UserInput'));
    }

    public function show($id)
    {
        $UserInput = UserInput::findOrFail($id);
        $persentase = $UserInput->hitungPersentase();

        return view('result', compact('persentase', 'UserInput'));
    }

    public function edit($id)
    {
        $UserInput = UserInput::findOrFail($id);
        return view('edit', compact('UserInput'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'input_1' => 'required|string',
            'input_2' => 'required|string'
        ]);

        $UserInput = UserInput::findOrFail($id);
        $UserInput->update([
            'input_1' => $request->input('input_1'),
            'input_2' => $request->input('input_2'),
        ]);

        $persentase = $UserInput->hitungPersentase();

        return view('result', compact('UserInput', 'persentase'));
    }

    public function destroy($id)
    {
        $userInput = UserInput::findOrFail($id);
        $userInput->delete();

        return redirect()->route('user-input');
    }
}