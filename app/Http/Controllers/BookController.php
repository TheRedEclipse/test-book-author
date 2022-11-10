<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookIndexRequest;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    function __construct(BookService $bookService) {
        $this->bookService = $bookService;
    }
    /**
     * Display a listing of the Book with filter by Author.
     *
     * @return \Illuminate\Http\JsonResponse
     * @OA\Get(
     *     path="/api/books",
     *     summary="Display a listing of the Book with filter by author.",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="search",
     *                     type="string"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(response="200", description="Display a listing of the books with filter by author.")
     * )
     */
    public function index(BookIndexRequest $request)
    {
        return response()->json([
            'success' => true,
            'books' => $this->bookService->index($request)
        ]);
    }
}
