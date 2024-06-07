<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Models\planssub;
use PhpParser\PrettyPrinter\Standard;

class PlanController extends Controller
{
    public function plan (Request $request)
    {
        $plansave = new Plan();

        $plansave -> car_model = trim($request->car_model);
        $plansave -> car_chasis = trim($request->chasis_number);
        $plansave -> car_plate = trim($request->plate_number);
        $plansave -> car_plan = trim($request->plan);
        $plansave -> user_id = Auth()->user()->id;
        $plansave -> save();

        //dd($request->plan);
        if ($request->plan=="Standard"){
            return redirect()->route('plans.show','Standard');
        }else{
            return redirect()->route('plans.show','Premium');
        }
//        return redirect('/');
    }

    public function frontForm(){
        $data['userplan']=Plan::userplan();
        return view('admin.plans.index',$data);
    }

    public function front(){
        $data['userp']=Plan::userplans();
        //return dd(Plan::userplans());
        return view('userplan.userplan',$data);

    }

    public function index()
    {
        $plans = planssub::get();
        return view("pages.plans", compact("plans"));
    }



    public function show(planssub $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
        return view('subscription', compact("plan", "intent"));
    }

//    public function subscription(Request $request)
//    {
//        $plan = planssub::find($request->plan);
//
//        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
//            ->create($request->token);
//
//        return view("subscription_success");
//    }

    public function subscription(Request $request)
    {
        $plan = planssub::find($request->plan);

        try {
            $subscription = $request->user()->newSubscription($request->name, $plan->stripe_plan)
                ->create($request->token);


            return redirect()->route('subscription.success');
        } catch (\Exception $e) {

            return redirect()->route('subscription.success')->withErrors(['msg' => $e->getMessage()]);
        }
    }




}
