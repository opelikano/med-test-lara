<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::orderBy('purchase_date', 'desc')->paginate(20);
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        return view('purchases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|numeric',
            'unit' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required|date',
        ]);

        Purchase::create($request->all());

        return redirect()->route('purchases.index')->with('success', 'Purchase created successfully.');
    }

    public function edit(Request $request, int $id)
    {
        $filename = str_replace('?' ,'', pathinfo($request->header('referer'), PATHINFO_FILENAME));
        parse_str($filename, $refPage);

        $purchase = Purchase::findOrFail($id);
        return view('purchases.edit', compact('purchase'))
              ->with('refPageNumber', isset($refPage['page']) ? $refPage['page'] : '');
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|numeric',
            'unit' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required|date',
        ]);

        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());

        return redirect()
            ->route('purchases.index', ['page' => $request->input('ref_page_number')])
            ->with('success', 'Purchase updated successfully.');
    }

    public function destroy(int $id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return back();
    }
}
