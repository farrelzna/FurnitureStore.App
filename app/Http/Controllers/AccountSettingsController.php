<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Product;
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
            'password' => 'required',
        ]);
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update();
        
        return redirect($validatedData)->route('account.index')->with('success', 'Update Product Success');
    }

    public function indexDashboard(Request $request) 
    {
        $productCount = Product::distinct('name')->count('name');
        $emailCount = User::distinct('email')->count('email');

        $users = User::paginate(2);

        return view('dashboard', compact('users','emailCount', 'productCount'));
    }

    public function indexHome(Request $request)
    {
        $products = Product::simplePaginate(3);
        $users = User::all();
        return view('home', compact('users', 'products'));
    }

    public function index()
    {
        $users = User::paginate(5);
        return view('account.index', compact('users'));
    }

    public function showProfile()
    {
        $users = User::all();
        return view('profile.index');
    }

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
     * Display the user's profile form.
     */
    public function settingAcount(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
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
}
