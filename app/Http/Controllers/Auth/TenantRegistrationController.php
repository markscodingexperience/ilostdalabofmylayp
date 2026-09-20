<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterTenantRequest;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TenantRegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterTenantRequest $request)
    {
        $validated = $request->validated();

        $user = DB::transaction(function () use ($validated) {
            $tenant = Tenant::create([
                'name' => $validated['business_name'],
                'slug' => $this->uniqueSlug($validated['business_name']),
                'business_type' => $validated['business_type'],
                'email' => $validated['email'],
                'subscription_plan' => 'trial',
            ]);

            // Created directly (not via the tenant-scoped trait) since there is
            // no authenticated user yet to auto-fill tenant_id from.
            return User::create([
                'tenant_id' => $tenant->id,
                'name' => $validated['owner_name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => 'owner',
            ]);
        });

        Auth::login($user);

        return redirect()->intended('/dashboard');
    }

    /**
     * Turn "Bella's Grooming Co." into a unique slug like "bellas-grooming-co",
     * appending -2, -3, etc. if the base slug is already taken.
     */
    private function uniqueSlug(string $name): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $suffix = 2;

        while (Tenant::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }
}