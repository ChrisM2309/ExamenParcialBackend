<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Http\Requests\StoreLoanRequest;
use App\Http\Requests\UpdateLoanRequest;
use App\Http\Resources\LoanResource; 

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLoanRequest $request)
    {
        $data = $request->validated();
        // hiring_date por defecto = hoy si no viene
        $data['loan_date'] = $data['loan_date'] ?? now()->toDateString();

        $book = Book::find($data['book_id']);
        if (!$book){
            return response()->json(['message' => 'No existe'], 404);
        }
        if ($book->available_copies <= 0){
            return response()->json(['message' => 'No hay copias disponibles'], 400);
        }
        $loan = Loan::create($data);
        $book['available_copies'] = $book->available_copies - 1;
        return response()->json(LoanResource::make($loan), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoanRequest $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }

    public function returns(int $id)
    {
        $loan = Loan::find($id);

        if (!$loan) {
            return response()->json([
                'message' => 'Prestamo no encontrado.'
            ], 404);
        }

        $book_id = $loan->book_id;

        $available_copies = Book::find($book_id)->available_copies;

        $return_date = $loan->return_date;

        if ($return_date) {
            return response()->json([
                'message' => 'El libro ya ha sido devuelto.'
            ], 422);
        }

        return response()->json([
            'message' => 'Devolucion realizada exitosamente.'
        ], 201);
    }
}
