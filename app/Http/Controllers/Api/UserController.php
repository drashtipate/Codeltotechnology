<?php

namespace App\Http\Controllers\Api;

use App\Models\client;
use App\Models\aboutus;
use App\Models\service;
use App\Models\menuitem;
use App\Models\contactus;
use App\Models\siteconfig;
use App\Models\technology;
use App\Models\footer_otherLink;
use App\Models\statistics_number;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class Usercontroller extends Controller
{
    public function service()
    {
       $users = service::all();
       if(count($users) > 0){
        return response()->json([
            'message' => count($users) . ' service found',
            'status'  => 'success',
            'data'    => $users
        ], 200);

       } else {
        return response()->json([
            'message' => count($users) . ' service not found',
            'status'  => 'failed',
        ], 404);
       }
   ;
    }

    public function aboutus()
    {
       $about = aboutus::all();
       if(count($about) > 0){
        return response()->json([
            'message' => count($about) . ' aboutus found',
            'status'  => 'success',
            'data'    => $about
        ], 200);

       } else {
        return response()->json([
            'message' => count($about) . ' aboutus not found',
            'status'  => 'failed',
        ], 404);
       }
    }

    public function aboutusstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'icon'          => 'required',
            'description'   => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'errors'  => $validator->messages()
            ], 422);
        }
        else{
            $data = [
                    'name'          => $request->name,
                    'icon'          => $request->icon,
                    'description'   => $request->description,
            ];
            DB::beginTransaction();
            try{
                $about = aboutus::create($data);
                DB::commit();
            } catch (\Exception $e) {
                // DB::rollBack();
                p($e->getMessage());
                $about = null;
            }
            if ($about != null) {
                return response()->json([
                    'message' => 'about-us data created Successfully',
                    'status'  => 'Success',
                ], 200);
            }else {
                return response()->json([
                    'message' => 'Internal Server Error',
                    'status'  => 'Failed'
                ], 500);
            }
        }
        // p($request->all());
    }

    public function aboutusshow($id)
    {

        $about = aboutus::find($id);

        if(is_null($about)){
            return response()->json([
                'message' => 'aboutus data not found',
                'status'  =>  404,
            ], 404);
        }
        else {
            return response()->json([
                'message'  => 'aboutus data found',
                'status'   =>  200,
                'data'     =>  $about,
            ], 200);
        }
    }

    public function aboutus_update(Request $request, $id)
    {
        $about = aboutus::find($id);

        if(is_null($about)){
            return response()->json(
                [
                    'status'  => 0,
                    'message' => "data doesn't exists" 
                ], 404);
        } 
        else {
            DB::beginTransaction();
            try {
                $about->name        = $request['name'];
                $about->icon        = $request['icon'];
                $about->description = $request['description'];

                $about->save();
                DB::commit();
            }
            catch(\Exception $e) {
                DB::rollback();
                $about = null;
            }

            if(is_null($about)) {
                return response()->json([
                    'status'    => 'failed',
                    'message'   => "Internal server error",
                    'error_msg' => $e->getMessage()
                ], 500);
            } 
            else {
                    return response()->json([
                        'status'    => 'success',
                        'message'   => "about data Updated Successfully" 
                    ],200
                );
            }
        }

    }

    public function aboutus_delete($id)
    {
        $about = aboutus::find($id);
        if(is_null($about)){
            $response = [
                'message' => "data doesn't exists",
                'status'  => 0
            ];
            $respCode = 404;
        } else {
            DB::beginTransaction();
            try {
                $about->delete();
                DB::commit();
                $response = [
                    'message' => "about data deleted successfully",
                    'status'  => 'success'
                ];
                $respCode = 200;
            } catch (\Exception $err) {
                DB::rollBack();
                $response = [
                    'message' => "Internal Server Error",
                    'status'  => 'failed'
                ];
                $resCose = 500;
            }
        }
        return response()->json($response, $respCode);
    }


    #clients 
    public function client()
    {
       $client = client::all();
       if(count($client) > 0){
        return response()->json([
            'message' => count($client) . ' clients data found',
            'status'  => 'success',
            'data'    => $client
        ], 200);

       } else {
        return response()->json([
            'message' => count($client) . ' clients not found',
            'status'  => 'failed',
        ], 404);
       }
    }

    public function clientstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'image'         => 'required',
            'content'       => 'required',
            'description'   => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'errors'  => $validator->messages()
            ], 422);
        }
        else{
            $data = [
                    'name'          => $request->name,
                    'image'         => $request->image,
                    'content'       => $request->content,
                    'description'   => $request->description,
            ];
            DB::beginTransaction();
            try{
                $client = client::create($data);
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();  //This is commented out
                p($e->getMessage());
                $client = null;
            }
            if ($client != null) {
                return response()->json([
                    'message' => 'client data created Successfully',
                    'status'  => 'Success',
                ], 200);
            }else {
                return response()->json([
                    'message' => 'Internal Server Error',
                    'status'  => 'Failed'
                ], 500);
            }
        }
        
    }

    public function clientshow($id)
    {
        $client = client::find($id);

        if(is_null($client)){
            return response()->json([
                'message' => 'clients data not found',
                'status'  => 404,
            ], 404);
        }
        else {
            return response()->json([
                'message'  => 'clients data found',
                'status'   => 200,
                'data'     => $client,
            ], 200);
        }
    }

    public function client_update(Request $request, $id)
    {
        $client = client::find($id);

        if(is_null($client)){
            return response()->json(
                [
                    'status'  => 0,
                    'message' => "data doesn't exists" 
                ], 404);
        } 
        else {
            DB::beginTransaction();
            try {
                $client->name        = $request['name'];
                $client->image       = $request['image'];
                $client->content     = $request['content'];
                $client->description = $request['description'];

                $client->save();
                DB::commit();
            }
            catch(\Exception $e) {
                DB::rollback();
                $client = null;
            }

            if(is_null($client)) {
                return response()->json([
                    'status'    => 'failed',
                    'message'   => "Internal server error",
                    'error_msg' => $e->getMessage()
                ], 500);
            } 
            else {
                    return response()->json([
                        'status'    => 'success',
                        'message'   => "clients data Updated Successfully" 
                    ], 200
                );
            }
        }

    }

    public function client_delete($id)
    {
        $client = client::find($id);
        if(is_null($client)){
            $response = [
                'message' => "data doesn't exists",
                'status'  => 0
            ];
            $respCode = 404;
        } else {
            DB::beginTransaction();
            try {
                $client->delete();
                DB::commit();
                $response = [
                    'message' => "client data deleted successfully",
                    'status'  => 'success'
                ];
                $respCode = 200;
            } catch (\Exception $err) {
                DB::rollBack();
                $response = [
                    'message' => "Internal Server Error",
                    'status'  => 'failed'
                ];
                $resCose = 500;
            }
        }
        return response()->json($response, $respCode);
    }


    #menu_items navbar
    public function navbar()
    {
       $navbar = menuitem::all();
       if(count($navbar) > 0){
        return response()->json([
            'message' => count($navbar) . ' navbar menu items data found',
            'status'  => 'success',
            'data'    => $navbar
        ], 200);

       } else {
        return response()->json([
            'message' => count($navbar) . ' navbar menu items data not found',
            'status'  => 'failed',
        ], 404);
       }
    }

    public function navbarmenustore(Request $request)
    {
        // $input = $request->all();

        $validator = Validator::make($request->all(), [
            'page'          => 'required',
            'canonical_url' => 'required',
            'title'         => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'    => 422,
                'errors'    => $validator->messages()
            ], 422);
        }
        else {
            $data = [
                'page'          => $request->page,
                'canonical_url' => $request->canonical_url,
                'title'         => $request->title,
            ];
            DB::beginTransaction();
            try{
                $navbar = menuitem::create($data);
                DB::commit();
            } 
            catch (\Exception $e) {
                DB::rollBack();         //This is commented out
                p($e->getMessage());   //This line outputs the error message of the exception
                $navbar = null;
            }

            // $navbar = menuitem::create($input);

            if ($navbar != null) {
                return response()->json([
                    'message' => 'navmenu items created Successfully',
                    'status'  => 'Success',
                ], 200);
            }
            else {
                return response()->json([
                    'message' => 'Internal Server Error',
                    'status'  => 'Failed',
                ], 500);
            }
        }
    }

     public function menuitemshow($id)
    {
        $navbar = menuitem::find($id);

        if(is_null($navbar)){
            return response()->json([
                'message' => 'navmenu items not found',
                'status'  => 404,
            ], 404);
        }
        else {
            return response()->json([
                'message'  => 'navmenu items found',
                'status'   => 200,
                'data'     => $navbar,
            ], 200);
        }
    }

    public function menuitems_delete($id)
    {
        $navbar = menuitem::find($id);
        if(is_null($navbar)){
            $response = [
                'message' => "data doesn't exists",
                'status'  => 0
            ];
            $respCode = 404;
        } else {
            DB::beginTransaction();
            try {
                $navbar->delete();
                DB::commit();
                $response = [
                    'message' => "navmenu items deleted successfully",
                    'status'  => 'success'
                ];
                $respCode = 200;
            } catch (\Exception $err) {
                DB::rollBack();
                $response = [
                    'message' => "Internal Server Error",
                    'status'  => 'failed'
                ];
                $resCose = 500;
            }
        }
        return response()->json($response, $respCode);
    }

    #contact us
    public function contactus()
    {
       $contact = contactus::all();
       if(count($contact) > 0){
        return response()->json([
            'message' => count($contact) . ' user contact data found',
            'status'  => 'success',
            'data'    => $contact
        ], 200);

       } else {
        return response()->json([
            'message' => count($contact) . ' user contact data not found',
            'status'  => 'failed',
        ], 404);
       }
    }

    
    public function contactusShow($id)
    {
        // return contactus::where('contact_name','like', "%".$contact_name."%")->get();
        $contact = contactus::find($id);
        if(is_null($contact)) {
            return response()->json([
                'message'   => 'user contact data not found',
                'status'    => 404,
            ], 404);
        }
        else {
            return response()->json([
                'message'       => 'user contact data found',
                'status'        =>  200,
                'user_contact'  =>  $contact,  
            ], 200);
        }
    }

    #siteconfig
    public function siteconfig() 
    {
        $siteconfig = siteconfig::all();
        if(count($siteconfig) > 0){
            return response()->json([
                'message'   => count($siteconfig) . ' user site data found',
                'status'    => 'success',
                'data'      => $siteconfig,
            ], 200);
        }
        else
        {
            return response()->json([
                'message'   => count($siteconfig) . ' user site data not found',
                'status'    => 'failed',
            ], 404);
        }
    }

    public function siteconfigstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'configKey'     => 'required',
            'configVal'     => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'    => 422,
                'errors'    => $validator->messages()
            ], 422);
        }
        else {
            $data = [
                'configKey'     => $request->configKey,
                'configVal'     => $request->configVal,
                
            ];
            DB::beginTransaction();
            try{
                $siteconfig = siteconfig::create($data);
                DB::commit();
            }
            catch (\Exception $e) {
                DB::rollback();
                p($e->getMessage());
                $siteconfig = null;
            }
            if($siteconfig != null) {
                return response()->json([
                    'message' => 'user site data created successfully',
                    'status'  => 'success',  
                ], 200);
            }
            else {
                return response()->json([
                    'message'   => 'Internal Server Error',
                    'status'    => 'failed',
                ], 500);
            }
        }
    }

    public function siteconfig_update(Request $request, $id)
    {
        $siteconfig = siteconfig::find($id);

        if(is_null($siteconfig)){
            return response()->json(
                [
                    'status'  => 0,
                    'message' => "data doesn't exists" 
                ], 404);
        } 
        else {
            DB::beginTransaction();
            try {
                $siteconfig->configKey   = $request['configKey'];
                $siteconfig->configVal   = $request['configVal'];

                $siteconfig->save();
                DB::commit();
            }
            catch(\Exception $e) {
                DB::rollback();
                $siteconfig = null;
            }

            if(is_null($siteconfig)) {
                return response()->json([
                    'status'    => 'failed',
                    'message'   => "Internal server error",
                    'error_msg' => $e->getMessage()
                ], 500);
            } 
            else {
                    return response()->json([
                        'status'    => 'success',
                        'message'   => "user site data Updated Successfully" 
                    ], 200
                );
            }
        }
    }

    public function siteconfig_delete($id)
    {
        $siteconfig = siteconfig::find($id);
        if(is_null($siteconfig)){
            $response = [
                'message' => "data doesn't exists",
                'status'  => 0
            ];
            $respCode = 404;
        } else {
            DB::beginTransaction();
            try {
                $siteconfig->delete();
                DB::commit();
                $response = [
                    'message' => "user site data deleted successfully",
                    'status'  => 'success'
                ];
                $respCode = 200;
            } catch (\Exception $err) {
                DB::rollBack();
                $response = [
                    'message' => "Internal Server Error",
                    'status'  => 'failed'
                ];
                $resCode = 500;
            }
        }
        return response()->json($response, $respCode);
    }


    #our strong number
    public function stats_number()
    {
       $number = statistics_number::all();
       if(count($number) > 0){
        return response()->json([
            'message' => count($number) . ' stats data found',
            'status'  => 'success',
            'data'    => $number
        ], 200);

       } else {
        return response()->json([
            'message' => count($number) . ' stats data not found',
            'status'  => 'failed',
        ], 404);
       }
    }

    public function statsnumberstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'stats_name'        => 'required',
            'stats_number'      => 'required',
            'icon_img'          => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'    => 422,
                'errors'    => $validator->messages()
            ], 422);
        }
        else {
            $data = [
                'stats_name'        => $request->stats_name,
                'stats_number'      => $request->stats_number,
                'icon_img'          => $request->icon_img,    
            ];
            DB::beginTransaction();
            try{
                $number = statistics_number::create($data);
                DB::commit();
            }
            catch (\Exception $e) {
                DB::rollback();
                p($e->getMessage());
                $number = null;
            }
            if($number != null) {
                return response()->json([
                    'message' => 'statistics data created successfully',
                    'status'  => 'success',  
                ], 200);
            }
            else {
                return response()->json([
                    'message'   => 'Internal Server Error',
                    'status'    => 'failed',
                ], 500);
            }
        }
    }

    public function statsnumber_update(Request $request, $id)
    {
        $number = statistics_number::find($id);

        if(is_null($number)){
            return response()->json(
                [
                    'status'  => 0,
                    'message' => "data doesn't exists" 
                ], 404);
        } 
        else {
            DB::beginTransaction();
            try {
                $number->stats_name     = $request['stats_name'];
                $number->stats_number   = $request['stats_number'];
                $number->icon_img	    = $request['icon_img'];

                $number->save();
                DB::commit();
            }
            catch(\Exception $e) {
                DB::rollback();
                $number = null;
            }

            if(is_null($number)) {
                return response()->json([
                    'status'    => 'failed',
                    'message'   => "Internal server error",
                    'error_msg' => $e->getMessage()
                ], 500);
            } 
            else {
                    return response()->json([
                        'status'    => 'success',
                        'message'   => "statistics data Updated Successfully" 
                    ], 200
                );
            }
        }
    }

    public function statsnumber_delete($id)
    {
        $number = statistics_number::find($id);
        if(is_null($number)){
            $response = [
                'message' => "data doesn't exists",
                'status'  => 0
            ];
            $respCode = 404;
        } else {
            DB::beginTransaction();
            try {
                $number->delete();
                DB::commit();
                $response = [
                    'message' => "statistics data deleted successfully",
                    'status'  => 'success'
                ];
                $respCode = 200;
            } catch (\Exception $err) {
                DB::rollBack();
                $response = [
                    'message' => "Internal Server Error",
                    'status'  => 'failed'
                ];
                $resCode = 500;
            }
        }
        return response()->json($response, $respCode);
    }

    public function technology()
    {
        $technology  = technology::all();
        if(count($technology) > 0)
        {
            return response()->json([
                'message'   => count($technology) . ' other technology data found',
                'status'    => 'success',
                'data'      => $technology
            ], 200);
        }
        else {
            return response()->json([
                'message'   => count($technology) . ' other technology data not found',
                'status'    => 'failed',
            ], 404);
        }
    }

    public function links()
    {
        $link  = footer_otherLink::all();
        if(count($link) > 0)
        {
            return response()->json([
                'message'   => count($link) . ' other links data found',
                'status'    => 'success',
                'link'      => $link
            ], 200);
        }
        else {
            return response()->json([
                'message'   => count($link) . ' other links data not found',
                'status'    => 'failed',
            ], 404);
        }
    }
}