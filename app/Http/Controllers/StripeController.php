<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use PDF;
class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
  
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 300,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test Test" 
        ]);

        $data = [
            'name' =>$request->name,
            'date' => date('m/d/Y')
        ];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download($request->name.'.pdf');
    }
}