<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $authorService;

    function __construct(AuthorService $authorService) {
        $this->authorService = $authorService;
    }

    /**
     * Display a listing of the Author.
     *
     * @return \Illuminate\Http\JsonResponse
     * @OA\Get(
     *     path="/api/authors",
     *     @OA\Response(response="200", description="Display a listing of Author.")
     * )
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'books' => $this->authorService->index()
        ]);
    }
}
