<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocion;

class OcionController extends Controller
{
    public function readOcion($id){
        return Ocion::findOrFail($id);
    }

    public function readPost(){
       return Ocion::all();
    }

    public function createOcion(Request $request){
        $data = $request->all();

        // $ocion = new Ocion();
        // // $ocion -> id = $data['id'];
        // $ocion-> title = $data['title'];
        // $ocion-> image = $data['image'];
        // $ocion-> name = $data['name'];
        // $ocion-> description = $data['description'];
        // $ocion-> available = $data['available'];
        // $ocion-> slot =$data['slot'];
        // $ocion-> pricelist = $data['pricelist'];
        // $ocion-> payment = $data['payment'];
        // $ocion-> collaboration = $data['collaboration'];

        // $ocion ->save();
        // $status = 'yeay bisa';
        // return response()->json(compact('status', 'ocion'),200);

        try{
            $ocion = new Ocion();
            //$ocion -> id = $data['id'];
            $ocion-> title = $data['title'];
            $ocion-> image = $data['image'];
            $ocion-> name = $data['name'];
            $ocion-> description = $data['description'];
            $ocion-> available = $data['available'];
            $ocion-> slot = $data['slot'];
            $ocion-> pricelist = $data['pricelist'];
            $ocion-> payment = $data['payment'];
            $ocion-> collaboration = $data['collaboration'];
    
            $ocion ->save();
            $status = 'BISAA';
            return response()->json(compact('status', 'ocion'),200);

        }catch(\Throwable $th){
            $status = 'failed ';
             // abort( response()->json('Unauthorized', 401) );
            // $exception->getMessage();
            return response()->json(compact('status', 'th'),401);
        }
    }

    public function updateOcion($id, Request $request){
        $data = $request->all();

        try{
            $ocion = new Ocion();
            //$ocion -> id = $data['id'];
            $ocion-> title = $data['title'];
            $ocion-> image = $data['image'];
            $ocion-> name = $data['name'];
            $ocion-> description = $data['description'];
            $ocion-> available = $data['available'];
            $ocion-> slot = $data['slot'];
            $ocion-> pricelist = $data['pricelist'];
            $ocion-> payment = $data['payment'];
            $ocion-> collaboration = $data['collaboration'];
    
            $ocion ->save();
            $status = 'BISAA';
            return response()->json(compact('status', 'ocion'),200);

        }catch(\Throwable $th){
            $status = 'failed ';
             // abort( response()->json('Unauthorized', 401) );
            // $exception->getMessage();
            return response()->json(compact('status', 'th'),401);
        }
    }

    public function deleteOcion($id){
        $ocion = Ocion::findOrFail($id);
        $ocion -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }

}
