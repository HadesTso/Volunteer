<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request, Volunteer $volunteerModel)
    {
        $name = $request->input('name', null);
        $volunteer = $request->input('volunteer', null);

        if ($volunteer && $name) {
            $volunteerData = $volunteerModel->where([
                'name' => $name,
                'volunteer' => $volunteer,
            ])->first();
        }else{
            $volunteerData = '';
        }

        return view('index', [
            'volunteer' => $volunteerData,
            'filters'  => [
                'name' => $name,
                'volunteer'  => $volunteer
            ],
        ]);
    }

    public function maike()
    {
        return view('maike');
    }
}
