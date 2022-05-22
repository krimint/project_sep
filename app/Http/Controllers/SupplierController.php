<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupplierController extends Controller
{
    //
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(6);

        return view('supplier.index',compact('suppliers'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }
    public function create()
    {
        return view('supplier.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|unique:supplier,nama_supplier',
            'tempat_supplier' => 'required',
            'status' => 'required'
        ]);
        $input = $request->all();
        Supplier::create($input);

        return redirect()->route('supplier.index')
                        ->with('success','Supplier Created Successfully.');
    }
    public function show(Supplier $supplier)
    {
        return view('supplier.show',compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        return view('supplier.edit',compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'nama_supplier' => 'required',
            'tempat_supplier' => 'required',
            'status' => 'required'
        ]);
        $input = $validated;
        $supplier->update($input);

        return redirect()->route('supplier.index')
                        ->with('success','Supplier Updated Successfully');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('supplier.index')
                        ->with('success','Supplier Deleted Successfully');
    }
}
