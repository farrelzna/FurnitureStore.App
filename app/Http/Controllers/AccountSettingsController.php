<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Symfony\Component\Mailer\Test\Constraint\EmailCount;

class AccountSettingsController extends Controller
{

    public function accountEdit($id)
    {
        $user = User::findOrFail($id);
        return view('account.edit', compact('user'));
    }

    public function accountUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Male,Female',
            'password' => 'nullable|min:8'
        ]);

        $user = User::findOrFail($id);

        $user->name = $validatedData['name'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        
        return redirect()->route('account.index')->with('success', 'Update Product Success');
    }

    public function settingAcount(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexDashboard(Request $request) 
    {
        $voucherCount = Voucher::distinct('name')->count('name');
        $productCount = Product::distinct('name')->count('name');
        $emailCount = User::distinct('email')->count('email');

        $users = User::paginate(2);

        return view('dashboard', compact('users','emailCount', 'productCount', 'voucherCount'));
    }

    public function indexHome(Request $request)
    {
        $voucher = Voucher::simplePaginate(4);
        $products = Product::simplePaginate(3);
        $users = User::all();
        return view('home', compact('users', 'products', 'voucher'));
    }

    public function index()
    {
        $users = User::paginate(5);
        return view('account.index', compact('users'));
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

    public function create()
    {
        return view('account.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        // Simpan data produk setelah validasi berhasil
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('account.index')->with('success', 'Added account Success');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('accountSettings.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/home');
    }

    public function delete(User $user, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('account.index')->with('success', 'Account deleted successfully');
    }
}
