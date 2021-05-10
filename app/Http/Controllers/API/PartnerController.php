<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Partner;
use App\PartnerSocialMedia;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::with('socialMedia')->get();
        return response()->json([
            'success' => true,
            'partners' => $partners
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = Partner::create([
            'avatar' => $request->avatar,
            'name' => $request->name,
            'role' => $request->role
        ]);

        foreach ($request->tag as $key => $socialMedia) {
            PartnerSocialMedia::create([
                'partner_id' => $partner->id,
                'tag' => $socialMedia,
                'url' => $request->url[$key],
            ]);
        }

        $password = Str::random(16);
        $user = User::create([
            'first_name' => $request->name,
            'last_name' => '',
            'email_address' => $request->email,
            'verified' => 1,
            'password' => Hash::make($password),
            'role' => 'partner'
        ]);

        return response()->json([
            'success' => true,
            'partner' => $partner,
            'password' => $password
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
