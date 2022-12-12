<?php

namespace App\Http\Controllers;

use App\Http\Requests\createAirPlaneRequest;
use App\Http\Requests\createFlightRequest;
use App\Models\Airplane;
use App\Models\City;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminView()
    {
        return view('user.admins.admin_panel');
    }

    public function createAirPlaneView()
    {
        $planes = Airplane::all();
        return view('airplanes.create_airplane', compact('planes'));
    }

    public function createAirPlanePost(createAirPlaneRequest $request)
    {
        $requests = $request->validated();
        $requests['name']= strtoupper($requests['name']);

        Airplane::create($requests);
        return redirect(route('createPlane'));
    }
    public function deleteAirPlanePost(Airplane $plane)
    {

        if(DB::table('flights')->where('airplane_id', $plane->id)->exists()){

            return back()->with(['errorPlanePlane'=>'Удалить нельзя, так как используется рейсом']);
        }
        $plane->delete();
        return redirect(route('createPlane'));
    }

    public function createFlightPost(createFlightRequest $request)
    {
        $requests = $request->validated();
        if(strtotime($requests['start_time'])>strtotime($requests['end_time'])){
            return back()->with(['errorDate'=>'Время вылета не может быть больше Времени прилета']);
        }
        if($requests['start_city_id']===$requests['end_city_id']){
            return back()->with(['errorCity'=>'Город вылета и город прилета не может совпадать']);
        }
        if(Flight::find($requests['airplane_id'])){
            return back()->with(['errorPlaneFlight'=>'Данный самолет уже используется']);
        }
        Flight::create($requests);
        return redirect(route('createFlight'));
    }
    public function createFlightView()
    {
        $planes = Airplane::all();
        $flights = Flight::all();
        $cities = City::all();
        return view('flights.create_flight', compact('planes', 'flights', 'cities'));
    }


}
