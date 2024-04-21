<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\FamilyList;
use App\Models\Nationality;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $nationalities = Nationality::all();
        return view('customers.create', compact('nationalities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cst_name' => 'required',
            'cst_dob' => 'required|date',
            'cst_phoneNum' => 'required',
            'cst_email' => 'required',
            'nationality_id' => 'required',
            'family_name.*' => 'required',
            'family_dob.*' => 'required|date',
        ]);

        $customer = Customer::create([
            'nationality_id' => $request->nationality_id,
            'cst_name' => $request->cst_name,
            'cst_dob' => $request->cst_dob,
            'cst_phoneNum' => $request->cst_phoneNum,
            'cst_email' => $request->cst_email,
        ]);

        // Simpan data keluarga
        $families = [];
        for ($i = 0; $i < count($request->family_name); $i++) {
            $families[] = new FamilyList([
                'fl_name' => $request->family_name[$i],
                'fl_dob' => $request->family_dob[$i],
            ]);
        }
        $customer->familyList()->saveMany($families);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }


    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $nationalities = Nationality::all();
        return view('customers.edit', compact('customer', 'nationalities'));
    }

    public function update(Request $request, Customer $customer)
    {
        // Validate the request
        $validatedData = $request->validate([
            'cst_name' => 'required',
            'cst_dob' => 'required',
            'cst_phoneNum' => 'required',
            'cst_email' => 'required',
            'nationality_id' => 'required'
        ]);

        // Update the customer
        $customer->update($validatedData);

        // Update family members
        if ($request->has('family_name')) {
            $customer->familyList()->delete(); // Delete existing family members
            foreach ($request->family_name as $key => $familyName) {
                $family = new FamilyList([
                    'fl_name' => $familyName,
                    'fl_dob' => $request->family_dob[$key]
                ]);
                $customer->familyList()->save($family);
            }
        }

        // Redirect to index page with success message
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
