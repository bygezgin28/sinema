<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Seans;
use App\Models\State;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{


    public function listState()
    {
        return response()->json(State::all());
    }

    public function listCinema($state_id)
    {
        $list = Cinema::where('state_id', '=', $state_id)->get();
        return response()->json($list);
    }

    public function listMovie($cinema_id)
    {

        $list = Movie::query()
            ->whereJsonContains('cinema_id', json_decode($cinema_id))
            ->get();

        return response()->json($list);
    }

    public function listSeans($cinema_id,$movie_id)
    {

        $list = Seans::where('cinema_id',$cinema_id)
            ->where('movie_id',$movie_id)
            ->get();

        return response()->json($list);
    }


    public function formTicket(Request $request)
    {

        $mevcut_ticket = Ticket::where('seans_id',$request->seans_id)
            ->whereJsonContains('koltuk_no', json_decode($request->koltuk_no))
            ->first();

        if(empty($mevcut_ticket)) {

            $validated = $request->validate([
                'seans_id' => 'required|exists:seans,id',
                'koltuk_no' => 'required|min:1|max:50',
            ]);


            $ticket = new Ticket;
            $ticket->user_id = Auth()->user()->id;
            $ticket->seans_id = $request->seans_id;
            $ticket->koltuk_no = json_encode([json_decode($request->koltuk_no)]);
            $ticket->save();

            return response()->json([
                'message' => 'Bilet Satın Alma Başarılı'
            ],200);
        }else{
            return response()->json([
                'message' => 'Bu Koltuk Başkası Tarafından Alınmış'
            ],200);
        }


    }


    public function listTicket($seans_id)
    {

        $list = Ticket::where('seans_id',$seans_id)->get();
        $seans = Seans::find($seans_id);


        if(!$list->isEmpty()) {
            foreach ($list as $key=>$lt){
                $dolu_kotuklar[$key] = json_decode($lt->koltuk_no);
            }
            $dolu_kotuklar = array_merge([], ...$dolu_kotuklar);

            $tum_koltuklar = range(1, $seans->koltuk_sayisi);
            $bos_koltuklar = array_diff($tum_koltuklar,$dolu_kotuklar);
        }else{
            $bos_koltuklar = range(1, $seans->koltuk_sayisi);

        }

        return response()->json($bos_koltuklar);
    }




}
