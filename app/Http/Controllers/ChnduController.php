<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Chndu;
use Illuminate\Support\Facades\Hash;
class ChnduController extends Controller
{
    public function index() {
        return view('customer');
    }

    public function store(Request $request) {
        $chndu = new Chndu;
        $chndu->name = $request->input('name');
        $chndu->email = $request->input('email');
        $chndu->gender = $request->input('gender');
        $chndu->address = $request->input('address');
        $chndu->state = $request->input('state');
        $chndu->country = $request->input('country');
        $chndu->dob = $request->input('dob');
        $chndu->password = Hash::make($request->input('password'));
        $chndu->save();

        return redirect()->route('view.customers');
    }

    public function trash() {
        $customers = Chndu::onlyTrashed()->paginate(4); // Get all trashed records
        return view('customerTrash', compact('customers')); // Pass the $customers variable to the view
    }



    public function restore($customer_id){
        $customer = Chndu::withTrashed()->find($customer_id);
        if ($customer) {
            $customer->restore();
        }

        return redirect()->route('trash.customers');
    }
    public function forcedelete($customer_id){
        $customer = Chndu::withTrashed()->find($customer_id);
        if ($customer) {
            $customer->forceDelete();
        }

        return redirect()->route('trash.customers');
    }

    public function view(Request $request) {
        $search = $request->input('search', ""); // Using 'input' method for better handling

        if ($search != "") {
            $customers = Chndu::where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('state', 'LIKE', "%{$search}%")
                ->orWhere('country', 'LIKE', "%{$search}%")
                ->orWhere('gender', 'LIKE', "%{$search}%")
                ->orWhere('dob', 'LIKE      ', "%{$search}%")
                ->paginate(10); // Corrected the variable name
        } else {
            $customers = Chndu::paginate(10);
        }

        return view('customerView', compact('customers','search')); // Ensure 'compact' is consistent with the variable name
    }


    public function delete($customer_id) {
        $customer = Chndu::find($customer_id);
        if ($customer) {
            $customer->delete();
        }

        return redirect()->route('view.customers');
    }

    public function edit($customer_id) {
        $customer = Chndu::find($customer_id);
        return view('customer', compact('customer'));
    }

    public function update(Request $request) {
        $customer = Chndu::find($request->customer_id);
        if ($customer) { // Added check to ensure customer exists
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->state = $request->state;
            $customer->country = $request->country;
            $customer->dob = $request->dob;
            $customer->save();
        }
        return redirect()->route('view.customers'); // Updated redirect to use route
    }

    public function create(Request $request) {
        // Implement logic if needed
    }
}
