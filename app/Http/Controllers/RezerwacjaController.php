<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rezerwacja;

class RezerwacjaController extends Controller
{
    public function dataInsert(Request $request)
    {
        $userId = auth()->user()->id;
        $typ = $request->typ_wyjazdu;
        $destynacja = $request->destination;
        $zakwaterowanie = $request->zakwaterowanie;
        $dojazd = $request->dojazd;
        $wyjazd = $request->input('dateStart');
        $powrot= $request->input('dateEnd');
        $dorosli = $request->input('adults');
        $dzieci = $request->input('children');

        $isInsertSuccess = Rezerwacja::insert([
            'typ_wyjazdu' => $typ,
            'destynacja' => $destynacja,
            'dojazd' => $dojazd,
            'data_wyjazdu' => $wyjazd,
            'data_powrot' => $powrot,
            'dorosli' => $dorosli,
            'dzieci' => $dzieci,
            'id_user' => $userId,
            'zakwaterowanie' => $zakwaterowanie
        ]);

        return view('reserved');
    }

    public function test() {
        return view('reserved');
    }
}
