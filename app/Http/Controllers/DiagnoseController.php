<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Indication;
use App\Models\Rule;
use Illuminate\Http\Request;

class DiagnoseController extends Controller
{
    public function index()
    {
        $data = [
            'indications' => Indication::all()
        ];

        // dd($indications);

        return view('diagnose.index', $data);
    }

    public function diagnose(Request $request)
    {
        // Get indications
        $indications = $request->except('_token');

        // dd($indications);

        // If indications empty return error
        if (empty($indications)) {
            return dd('Mohon pilih indikasi atau gejala si kucing!');
        }

        // Get model with indications condition
        $rule = (new Rule)->newQuery();

        foreach ($indications as $uid => $value) {
            $rule->where($uid, '=', $value);
        }

        $result = $rule->first();

        if ($result != null) {
            // Get disease by uid
            $disease = Disease::where('uid', '=', $result->disease_uid)->first();

            return view('diagnose.result', ['disease' => $disease]);
        } else {
            return view('diagnose.result', ['disease' => null]);
        }
    }
}
