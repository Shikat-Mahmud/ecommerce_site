<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\BillingDetail;
use Illuminate\Http\Request;

class BillingDetailController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        try {
            $billingDetail = BillingDetail::create([
                'user_id' => auth()->id(),
                'fname' => $validatedData['fname'],
                'lname' => $validatedData['lname'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'postal_code' => $validatedData['postal_code'],
                'country' => $validatedData['country'],
            ]);

            // Now place the order
            app(abstract: OrderController::class)->placeOrder($request);

            // return response()->json(['message' => 'Billing detail created successfully!', 'data' => $billingDetail], 201);
            return redirect()->route('order.success');

        } catch (\Exception $e) {
            \Log::error('Error creating billing detail: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to create billing detail'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        try {
            $billingDetail = BillingDetail::findOrFail($id);

            if ($billingDetail->user_id !== auth()->id()) {
                return response()->json(['message' => 'Unauthorized access'], 403);
            }

            $billingDetail->update($validatedData);

            // Now place the order
            app(abstract: OrderController::class)->placeOrder($request);

            // return response()->json(['message' => 'Billing detail updated successfully!', 'data' => $billingDetail], 200);
            return redirect()->route('order.success');

        } catch (\Exception $e) {
            \Log::error('Error updating billing detail: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to update billing detail'], 500);
        }
    }

    public function profileStore(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        try {
            $billingDetail = BillingDetail::create([
                'user_id' => auth()->id(),
                'fname' => $validatedData['fname'],
                'lname' => $validatedData['lname'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'postal_code' => $validatedData['postal_code'],
                'country' => $validatedData['country'],
            ]);

            // return response()->json(['message' => 'Billing detail created successfully!', 'data' => $billingDetail], 201);
            return back()->with('success', 'Billing detail created successfully!');

        } catch (\Exception $e) {
            \Log::error('Error creating billing detail: ' . $e->getMessage());
            // return response()->json(['message' => 'Failed to create billing detail'], 500);
            return back()->with('error', 'Error creating billing detail: ' . $e->getMessage());
        }
    }

    public function profileUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        try {
            $billingDetail = BillingDetail::findOrFail($id);

            if ($billingDetail->user_id !== auth()->id()) {
                // return response()->json(['message' => 'Unauthorized access'], 403);
                return back()->with('error', 'Unauthorized access');
            }

            $billingDetail->update($validatedData);

            // return response()->json(['message' => 'Billing detail updated successfully!', 'data' => $billingDetail], 200);
            return back()->with('success', 'Billing detail updated successfully!');

        } catch (\Exception $e) {
            \Log::error('Error updating billing detail: ' . $e->getMessage());
            // return response()->json(['message' => 'Failed to update billing detail'], 500);
            return back()->with('error', 'Error updating billing detail: ' . $e->getMessage());
        }
    }
}
