<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\AgentOrder;
use App\Models\AgentPlan;
use App\Models\ConsumerOder;
use App\Models\Subscription;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class OdersController extends Controller
{
    public function viewConsumerOrders()
    {
        $list = ConsumerOder::where('status','pending')->get();
        return view('orders.Consumer-Orders',['list'=>$list]);
    }

    public function approveConsumerOrder($id)

    {
        
         $list = ConsumerOder::where('status','pending')->get();
         $data =  ConsumerOder::find($id);

         $data ->status = "proccessed";
         $data = $data->save();
           return $data ? back()->with('message_success','Order  proccessed successfully',['list'=>$list]) : back()->with('message_error','Something went wrong, please try again.');
    }

    public function viewConsumerProccessedOrders(){
         $list = ConsumerOder::where('status','proccessed')->get();
        return view('orders.Consumer-Proccessed-Orders',['list'=>$list]);
    }

     public function viewAgentOrders()
    {
        $list = AgentOrder::where('status','pending')->get();
        return view('orders.Agent-Orders',['list'=>$list]);
    }

    public function approveAgentOrder($id)

    {
        
         $list = AgentOrder::where('status','pending')->get();
         $data =  AgentOrder::find($id);

         $data ->status = "proccessed";
         $data = $data->save();
           return $data ? back()->with('message_success','Order  proccessed successfully',['list'=>$list]) : back()->with('message_error','Something went wrong, please try again.');
    }

    public function viewAgentProccessedOrders(){
         $list = AgentOrder::where('status','proccessed')->get();
        return view('orders.Agent-Proccessed-Orders',['list'=>$list]);
    }

     public function viewSubscriptions(){
         $list = Subscription::where('status','success')->get();
        return view('orders.All-Subscriptions',['list'=>$list]);
    }

     public function approveAgentSubOrder($id)

    {
        
         $list = Subscription::where('status','success')->get();
         $data =  Subscription::find($id);

         $data ->status = "approved";
         $data ->updated_at = Carbon::now();
         $data = $data->save();
           return $data ? back()->with('message_success','Subscription  approved successfully',['list'=>$list]) : back()->with('message_error','Something went wrong, please try again.');
    }

    public function MyDeposit(){

         $list = Wallet::where('status','pending')->get();
        return view('orders.Deposit',['list'=>$list]);

    }

     public function approveWalletOrder($id)

    {
        
         $list = Wallet::where('status','pending')->get();
         $data =  Wallet::find($id);

         $data ->status = "approved";
         $data = $data->save();
           return $data ? back()->with('message_success','Deposit  approved successfully',['list'=>$list]) : back()->with('message_error','Something went wrong, please try again.');
    }

    public function ListWallets(){

         $list = Wallet::where('status','approved')->get();

         return view('orders.Wallet-Approved-Trans',['list'=>$list]);

    }
}
