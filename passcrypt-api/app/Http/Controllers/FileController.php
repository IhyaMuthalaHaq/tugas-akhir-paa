<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function index($user_id)
    {
        return File::where('user_id', $user_id)->get();
    }

    public function show($id)
    {
        return File::find($id);
    }

    public function store(Request $request)
    {
        $file = File::create($request->all());
        return response()->json($file, 201);
    }

    public function update(Request $request, $id)
    {
        $file = File::findOrFail($id);
        $file->update($request->all());
        return response()->json($file, 200);
    }

    public function delete($id)
    {
        File::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
