<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function readProfile($id){
        return Profile::findOrFail($id);
    }

    public function readProfiley(){
       return Profile::all();
    }

    public function createProfile(Request $request){
        $data = $request->all();

        try{
            $profile = new profile();
            //$ocion -> id = $data['id'];
            $profile-> name = $data['name'];
            $profile-> username = $data['username'];
            $profile-> bio = $data['bio'];
            $profile-> link = $data['link'];
          
            $profile ->save();
            $status = 'BISAA';
            return response()->json(compact('status', 'profile'),200);

        }catch(\Throwable $th){
            $status = 'failed ';
             // abort( response()->json('Unauthorized', 401) );
            // $exception->getMessage();
            return response()->json(compact('status', 'th'),401);
        }

    }

    public function updateProfile($id, Request $request){
        $data = $request->all();

        try{
            $ocion = new profile();
            //$ocion -> id = $data['id'];
            $profile-> name = $data['title'];
            $profile-> username = $data['image'];
            $profile-> bio = $data['name'];
            $profile-> link = $data['link'];
          
            $profile ->save();
            $status = 'BISAA';
            return response()->json(compact('status', 'profile'),200);

        }catch(\Throwable $th){
            $status = 'failed ';
             // abort( response()->json('Unauthorized', 401) );
            // $exception->getMessage();
            return response()->json(compact('status', 'th'),401);
        }

    }

    public function deleteProfile($id){
        $profile = profile::findOrFail($id);
        $profile -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }

}
