<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['user', 'book'])->get();
        return response()->json($loans);
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:book,id',
            'loan_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:loan_date',
        ]);

        $loan = Loan::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'loan_date' => $request->loan_date,
            'return_date' => $request->return_date,
        ]);

        return response()->json($loan, 201);
    }
}
