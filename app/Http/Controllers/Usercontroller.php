<?php

namespace App\Http\Controllers;

use Mail;
use Throwable;
use DataTables;
use Newsletter;

use App\helper\helper;
use App\Models\aboutus;
use App\Models\service;


use App\Models\contactus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Http; 
use illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Support\Renderable;
use Symfony\Contracts\Service\Attribute\Required;

class Usercontroller extends Controller
{
    public function index() {
        #title icon
        $faviconimg_title  = DB::table('siteconfigs')->where('configKey', 'faviconimg_title')->value('configVal');

        #header
        $homeHeaderTitleBold  = DB::table('siteconfigs')->where('configKey', 'homeHeaderTitleBold')->value('configVal');
        $homeHeaderTitle      = DB::table('siteconfigs')->where('configKey', 'homeHeaderTitle')->value('configVal');
        $homeHeaderImage      = DB::table('siteconfigs')->where('configKey', 'homeHeaderImage')->value('configVal');  
        $homeHeaderSubTitle   = DB::table('siteconfigs')->where('configKey', 'homeHeaderSubTitle')->value('configVal');

        #menuitems navbar
        $menuitem            = DB::table('menuitems')->orderBy('id','ASC')->get();
        $navbarlogo          = DB::table('siteconfigs')->where('configKey', 'navbarlogo')->value('configVal');
        $navbarsmallogo      = DB::table('siteconfigs')->where('configKey', 'navbarsmallogo')->value('configVal');

        #about 
        // $aboutTitle = DB::table('siteconfigs')->orderBy('configId','ASC')->get();
        $aboutTitle         = DB::table('siteconfigs')->where('configKey', 'aboutTitle')->value('configVal');
        $aboutSubTitle      = DB::table('siteconfigs')->where('configKey', 'aboutSubTitle')->value('configVal');

        $about              = aboutus::orderBy('id','ASC')->get();

        #our clients
        $client             = DB::table('clients')->orderBy('id','ASC')->get();
        $OurclientsTitle    = DB::table('siteconfigs')->where('configKey','OurclientsTitle')->value('configVal');
        $OurclientsSubTitle = DB::table('siteconfigs')->where('configKey','OurclientsSubTitle')->value('configVal');

        #service
        // $service            = DB::table('services')->orderBy('serviceId','ASC')->get();
        // $leftservice        = service::where('side', 'left')->get();
        // $rightservice       = service::where('side', 'right')->get();

        $serviceTitle       = DB::table('siteconfigs')->where('configKey', 'serviceTitle')->value('configVal');
        $serviceSubTitle    = DB::table('siteconfigs')->where('configKey', 'serviceSubTitle')->value('configVal');
        $serviceimageright  = DB::table('siteconfigs')->where('configKey', 'serviceimageright')->value('configVal');
        $serviceimageleft   = DB::table('siteconfigs')->where('configKey', 'serviceimageleft')->value('configVal'); 
        
        $serviceName1        = DB::table('siteconfigs')->where('configKey', 'serviceName1')->value('configVal'); 
        $serviceDescription1 = DB::table('siteconfigs')->where('configKey', 'serviceDescription1')->value('configVal');
        $serviceName2        = DB::table('siteconfigs')->where('configKey', 'serviceName2')->value('configVal'); 
        $serviceDescription2 = DB::table('siteconfigs')->where('configKey', 'serviceDescription2')->value('configVal');
        $serviceName3        = DB::table('siteconfigs')->where('configKey', 'serviceName3')->value('configVal'); 
        $serviceDescription3 = DB::table('siteconfigs')->where('configKey', 'serviceDescription3')->value('configVal'); 
        $serviceName4        = DB::table('siteconfigs')->where('configKey', 'serviceName4')->value('configVal'); 
        $serviceDescription4 = DB::table('siteconfigs')->where('configKey', 'serviceDescription4')->value('configVal'); 

        #our strong number
        $statsdata      = DB::table('statistics_numbers')->orderBy('id','ASC')->get();
        

        #contactus
        $contactusTitle         = DB::table('siteconfigs')->where('configKey', 'contactusTitle')->value('configVal');
        $contactusSubTitle      = DB::table('siteconfigs')->where('configKey', 'contactusSubTitle')->value('configVal');

        $contactusAddress       = DB::table('siteconfigs')->where('configKey', 'contactusAddress')->value('configVal');
        $contactusMobileno1     = DB::table('siteconfigs')->where('configKey', 'contactusMobileno1')->value('configVal');
        $contactusMobileno2     = DB::table('siteconfigs')->where('configKey', 'contactusMobileno2')->value('configVal');
        $contactusEmail         = DB::table('siteconfigs')->where('configKey', 'contactusEmail')->value('configVal');

        #footer
        $technology             = DB::table('technologies')->orderBy('id','ASC')->get();
        $link                   = DB::table('footer_other_links')->orderBy('id', 'ASC')->get();

        $footerHeaderName1      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName1')->value('configVal');
        $footerHeaderName2      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName2')->value('configVal');
        $footerHeaderName3      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName3')->value('configVal');
        $contactusAddressLink   = DB::table('siteconfigs')->where('configKey', 'contactusAddressLink')->value('configVal');
        $footerCopyright        = DB::table('siteconfigs')->where('configKey', 'footerCopyright')->value('configVal');
        $FacebookLink           = DB::table('siteconfigs')->where('configKey', 'FacebookLink')->value('configVal');
        $linkedInLink           = DB::table('siteconfigs')->where('configKey', 'linkedInLink')->value('configVal');
        $YoutubeLink            = DB::table('siteconfigs')->where('configKey', 'YoutubeLink')->value('configVal');

        return view('index', compact('faviconimg_title','navbarlogo','navbarsmallogo','menuitem','homeHeaderTitleBold','homeHeaderTitle','homeHeaderImage','homeHeaderSubTitle','about','aboutTitle', 'aboutSubTitle','client','serviceTitle','serviceSubTitle','serviceimageright','serviceimageleft','serviceName1','serviceDescription1','serviceName2','serviceDescription2','serviceName3','serviceDescription3',
                        'serviceName4','serviceDescription4','contactusTitle','contactusSubTitle', 'footerCopyright','contactusAddress','contactusMobileno1','contactusMobileno2','contactusEmail','OurclientsTitle','OurclientsSubTitle','FacebookLink','linkedInLink','YoutubeLink','contactusAddressLink','statsdata','technology','footerHeaderName1',
                        'footerHeaderName2','footerHeaderName3','link'));
    }

    #CONTACTUS SECTION PART
    public function contact(Request $request) {
        
        $contactusAddress   = DB::table('siteconfigs')->where('configKey', 'contactusAddress')->value('configVal');
        $contactusMobileno1 = DB::table('siteconfigs')->where('configKey', 'contactusMobileno1')->value('configVal');
        $contactusMobileno2 = DB::table('siteconfigs')->where('configKey', 'contactusMobileno2')->value('configVal');
        $contactusEmail     = DB::table('siteconfigs')->where('configKey', 'contactusEmail')->value('configVal');
        $contactusTitle     = DB::table('siteconfigs')->where('configKey', 'contactusTitle')->value('configVal');
        $contactusSubTitle1 = DB::table('siteconfigs')->where('configKey', 'contactusSubTitle1')->value('configVal');

        #menuitems navbar
        $menuitem            = DB::table('menuitems')->orderBy('id','ASC')->get();
        $navbarlogo          = DB::table('siteconfigs')->where('configKey', 'navbarlogo')->value('configVal');
        $navbarsmallogo      = DB::table('siteconfigs')->where('configKey', 'navbarsmallogo')->value('configVal');

        #footer
        $technology             = DB::table('technologies')->orderBy('id','ASC')->get();
        $link                   = DB::table('footer_other_links')->orderBy('id', 'ASC')->get();

        $footerHeaderName1      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName1')->value('configVal');
        $footerHeaderName2      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName2')->value('configVal');
        $footerHeaderName3      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName3')->value('configVal');
        $contactusAddressLink   = DB::table('siteconfigs')->where('configKey', 'contactusAddressLink')->value('configVal');
        $footerCopyright        = DB::table('siteconfigs')->where('configKey', 'footerCopyright')->value('configVal');
        $FacebookLink           = DB::table('siteconfigs')->where('configKey', 'FacebookLink')->value('configVal');
        $linkedInLink           = DB::table('siteconfigs')->where('configKey', 'linkedInLink')->value('configVal');
        $YoutubeLink            = DB::table('siteconfigs')->where('configKey', 'YoutubeLink')->value('configVal');


        return view('contact' ,compact('navbarlogo','navbarsmallogo','menuitem','footerCopyright','FacebookLink','linkedInLink','YoutubeLink','contactusAddress','contactusMobileno1','contactusMobileno2','contactusEmail','contactusTitle','contactusSubTitle1','contactusAddressLink','technology','footerHeaderName1',
                                        'footerHeaderName2','footerHeaderName3','link'));
    }

    #SERVICE SECTION PART
    public function service() {

        $serviceTitle       = DB::table('siteconfigs')->where('configKey', 'serviceTitle')->value('configVal');
        $serviceSubTitle    = DB::table('siteconfigs')->where('configKey', 'serviceSubTitle')->value('configVal');

        #menuitems navbar
        $menuitem           = DB::table('menuitems')->orderBy('id','ASC')->get();
        $navbarlogo         = DB::table('siteconfigs')->where('configKey', 'navbarlogo')->value('configVal');
        $navbarsmallogo     = DB::table('siteconfigs')->where('configKey', 'navbarsmallogo')->value('configVal');

        #footer
        $technology             = DB::table('technologies')->orderBy('id','ASC')->get();
        $link                   = DB::table('footer_other_links')->orderBy('id', 'ASC')->get();

        $footerHeaderName1      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName1')->value('configVal');
        $footerHeaderName2      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName2')->value('configVal');
        $footerHeaderName3      = DB::table('siteconfigs')->where('configKey', 'footerHeaderName3')->value('configVal');
        $footerCopyright        = DB::table('siteconfigs')->where('configKey', 'footerCopyright')->value('configVal');
        $FacebookLink           = DB::table('siteconfigs')->where('configKey', 'FacebookLink')->value('configVal');
        $linkedInLink           = DB::table('siteconfigs')->where('configKey', 'linkedInLink')->value('configVal');
        $YoutubeLink            = DB::table('siteconfigs')->where('configKey', 'YoutubeLink')->value('configVal');
        $contactusAddress       = DB::table('siteconfigs')->where('configKey', 'contactusAddress')->value('configVal');
        $contactusAddressLink   = DB::table('siteconfigs')->where('configKey', 'contactusAddressLink')->value('configVal');
        $contactusMobileno1     = DB::table('siteconfigs')->where('configKey', 'contactusMobileno1')->value('configVal');
        $contactusMobileno2     = DB::table('siteconfigs')->where('configKey', 'contactusMobileno2')->value('configVal');
        $contactusEmail         = DB::table('siteconfigs')->where('configKey', 'contactusEmail')->value('configVal');

        return view('service',compact('navbarlogo','navbarsmallogo','serviceTitle','serviceSubTitle','menuitem','footerCopyright','FacebookLink','linkedInLink','YoutubeLink','contactusAddress','contactusMobileno1','contactusMobileno2','contactusEmail','contactusAddressLink','technology','footerHeaderName1','footerHeaderName2','footerHeaderName3','link'));
    }

    public function contactus(Request $request){
        #validation
        $validator = Validator::make($request->all(),[
                'contact_name'          => 'required|string|max:255',
                'contact_email'         => 'required|email|regex:/(.*)@gmail\.com/i',
                'contact_subject'       => 'required|string|max:255',
                'contact_message'       => 'required|string|max:255',
                'g-recaptcha-response'  => 'required',
            ]);

            if ($validator->fails()) {
                $request->session()->flash('danger', $validator->errors()->first());
                return response()->redirectTo('/contactus');
            }

        try{

            #store data in database
            $contactus = new contactus();
            $contactus->contact_name = $request->contact_name;
            $contactus->contact_email = $request->contact_email; 
            $contactus->contact_subject = $request->contact_subject;
            $contactus->contact_message = $request->contact_message;
            // $token = $request->input('g-racaptcha-response');
            // dd($token);
            
            // #Send mail 
            \Mail::send('email.email-template', array(
                'contact_name'      => $request->get('contact_name'),
                'contact_email'     => $request->get('contact_email'),
                'contact_subject'   => $request->get('contact_subject'),
                'contact_message'   => $request->get('contact_message'),
            ), function($message) use ($request) {
                $message->from($request->get('contact_email'), 'laravel');
                $message->to('drashtiv2392002@gmail.com')->subject($request->get('contact_subject'));
            });

            $contactus->save();
            \DB::commit();
            return redirect()->back()->with("success","We have received your message and would like to thank you for writing to us.!");

        } catch (Throwable $e) {    
            return redirect()->back()->with("danger","Something Went Wrong!!");
        }
    }

}
