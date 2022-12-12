<?php

namespace App\Http\Controllers;

use App\Http\Requests\createAirPlaneRequest;
use App\Models\Airplane;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView()
    {
        return view('user.admins.admin_panel');
    }

    public function createAirPlaneView()
    {
        return view('airplanes.create_airplane');
    }

    public function createAirPlanePost(createAirPlaneRequest $request)
    {
        $requests = $request->validated();
        Airplane::create($requests);
        return redirect(route('createPlane'));
    }


}
