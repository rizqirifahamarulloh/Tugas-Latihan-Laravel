<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();

        if ($books->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Resources data notfound',
                'data' => [],
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'get all resources data',
            'data' => $books,
        ], 200);
    }

    public function store(Request $request)
    {
        // Tahap 1: aturan validasi request.
        $validator = Validator::make($request->all(), [
            'author_id' => 'required|exists:authors,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Tahap 2: cek apakah validasi menghasilkan error.
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        // Tahap 3: unggah gambar ke penyimpanan publik.
        $imagePath = $request->file('image')->store('books', 'public');
        $validated['image'] = $imagePath;

        // Tahap 4: simpan data tervalidasi ke database.
        $book = Book::create($validated);

        // Tahap 5: kirim konfirmasi hasil akhir dalam JSON.
        return response()->json([
            'success' => true,
            'message' => 'Resource created successfully',
            'data' => $book->load('author'),
        ], 201);
    }

    public function show(string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $book->load('author')
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found',
                'data' => null
            ], 404);
        }

        // Aturan validasi request
        $validator = Validator::make($request->all(), [
            'author_id' => 'sometimes|required|exists:authors,id',
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'price' => 'sometimes|required|integer|min:0',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        // Handle image upload jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('books', 'public');
            $validated['image'] = $imagePath;
        }

        $book->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully',
            'data' => $book->load('author'),
        ], 200);
    }

    public function destroy(string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found',
                'data' => null
            ], 404);
        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Resource deleted successfully',
            'data' => null
        ], 200);
    }
}
