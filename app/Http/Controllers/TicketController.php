<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use DB;
use Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
         $id = Auth::user()->id;
         $data=DB::table('tickets')
              ->join('users', 'users.id', '=', 'tickets.user_id')
             // ->where('users.id', '=', $id)
            //  ->select('tickets.id as ticket_id', '')
              ->get();
              return view('dashboard', compact('data'));
        //return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *destroy_ticket/<?php echo $value->ticket_id;?>
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('ticket/create_ticket');

    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tickets = new Ticket();
        $tickets->ticket_name = $request->input('ticket_name');
        $tickets->ticket_description = $request->input('ticket_description');
        $tickets->user_id = $request->input('user_id');

        try {
            $tickets->save();
        } catch (Exception $e) {
            return response()->json(array(
                "success" => false,
                "message" => "Internal Server Error",
                "data" => $e 
            ));
        }

        return response()->json($tickets);
    }
    public function store_ticket(Request $request)
    {
        $id = Auth::user()->id;
        $tickets = new Ticket();
        $tickets->ticket_name = $request->input('ticket_name');
        $tickets->ticket_description = $request->input('ticket_description');
        $tickets->user_id = $id;

        //dd($tickets->all());

        try {
            $tickets->save();
            //return response()->json($tickets);

        } catch (Exception $e) {
            return response()->json(array(
                "success" => false,
                "message" => "Internal Server Error",
                "data" => $e 
            ));
        }
        $success['su']="Ticket Created Successfully...!";
        return view('ticket/create_ticket', $success);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show()
    {   
        $id = Auth::user()->id;
        $data=DB::table('tickets')
              ->join('users', 'users.id', '=', 'tickets.user_id')
              //->where('users.id', '=', $id)
              ->get();
             // return $data; exit;
              return view('dashboard', compact('data'));
        // $show_tickets = new Ticket();
        // return response()->json($show_tickets->get(), 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_ticket($id)
    {
        $data=DB::table('tickets')
              ->join('users', 'users.id', '=', 'tickets.user_id')
              ->where('ticket_id', '=', $id)
              ->get();
        return view('ticket/ticket_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_ticket(Request $request)
    {
        $id = Auth::user()->id;
        $tickets = new Ticket();
        $tickets->ticket_name = $request->input('ticket_name');
        $tickets->ticket_description = $request->input('ticket_description');
        $tickets->user_id = $id;
        $ticket_id = $request->input('ticket_id');

        dd($tickets->all()); exit;

        try {
            $tickets->update()->where();
            //return response()->json($tickets);

        } catch (Exception $e) {
            return response()->json(array(
                "success" => false,
                "message" => "Internal Server Error",
                "data" => $e 
            ));
        }
        $success['su']="Ticket Created Successfully...!";
        return view('ticket/create_ticket', $success);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_ticket($idt)
    {
        $idu = Auth::user()->id;
        $dataDel=DB::table('tickets')
                ->where('ticket_id', '=', $idt)
                ->delete();

        $data=DB::table('tickets')
              ->join('users', 'users.id', '=', 'tickets.user_id')
              //->where('users.id', '=', $idu)
              ->get();
              return view('dashboard', compact('data'));
    }
    public function ticket_details($id)
    {
        //$idu = Auth::user()->id;
        $data=DB::table('tickets')
              ->join('users', 'users.id', '=', 'tickets.user_id')
              ->where('ticket_id', '=', $id)
              ->get();
        return view('ticket/ticket_details', compact('data'));
    }
}
