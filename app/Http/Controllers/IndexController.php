<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request, Volunteer $volunteerModel)
    {
        $order = $request->input('order', null);
        $search = $request->input('search', null);

        if (!$order){
            $order = 'id';
        }

        $volunteer = $volunteerModel->where([
            $order => $search
        ])->first();

        return view('index', ['volunteer' => $volunteer]);
    }

    public function maike()
    {
        return view('maike');
    }
}
