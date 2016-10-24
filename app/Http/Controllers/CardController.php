<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controlller;
use Illuminate\Http\Request;
use App\Card;
use App\Http\Requests;
use App\Http\Requests\CardRequest;
use App\Http\Requests\CardModifyRequest;
use App\Repositories\CardRepository;
class CardController extends Controller
{
    //the card repository instance
    protected $cards;
    public function __construct(CardRepository $cards){
        $this->middleware('auth');
        $this->cards=$cards;
    
    }

    //add a new card
    public function addcard(CardRequest $request){
        $validator=$request->all();
        $card=new Card;
        $card->name=$request->name;
        $card->billamount=$request->billamount;
        $card->repayment=$request->repayment;
        $card->totalamount=$request->totalamount;
        $card->balance=$request->balance;
        $card->remark=$request->remark;
        $card->user_id=$request->user()->id;
        $card->save();
        return redirect('cards');
    }
    //modify a card
    public function modifycard(CardModifyRequest $request){
        $id=$request->id;
        $card=Card::findOrFail($id);
        $card->name=$request->name;
        $card->billamount=$request->billamount;
        $card->repayment=$request->repayment;
        $card->totalamount=$request->totalamount;
        $card->balance=$request->balance;
        $card->remark=$request->remark;
        $card->user_id=$request->user()->id;
        $card->update();
        return redirect('/cards');
    }
    //modify get
    public function modifycardget($id){
        $card=Card::findOrFail($id);
       return view('/cards/modify',['card'=>$card]); 
    }
    //delete a card
    public function delete($id){
        Card::findOrFail($id)->delete();
        return redirect('/cards');
    }
    //display all card
    public function display(Request $request){
    $cards=$this->cards->forUser($request->user());
    return view('/cards/index',['cards'=>$cards]);
    }
}
