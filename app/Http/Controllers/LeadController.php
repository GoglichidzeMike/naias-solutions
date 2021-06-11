<?php

namespace App\Http\Controllers;

use App\Mail\MessageSubmitted;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

    
    public function index()
    {
        $leads = Lead::orderBy('created_at', 'desc')->paginate(20);

        return view('dashboard.leads.index',[
            'leads' => $leads
        ]);
    }



    public function store(Request $request)
    {


        //validate all the request
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
        ]);


        $single = Lead::create(
            [
             'name'=> $request->name,
             'message'=> $request->message,
             'website'=> $request->website,
             'company'=> $request->company,
             'email'=> $request->email,
            ]
        );




        Mail::to('info@naiassolutions.com')->send(new MessageSubmitted($single));




        return redirect(url()->previous().'#contact')->with('message', 'Your message was successfully sent!');
    }


    public function show($id)
    {
          $lead = Lead::find($id);
          return view('dashboard.leads.show', ['lead'=>$lead]);
    }


    public function destroy($id)
    {
        $lead = Lead::find($id);
        $lead->delete();
        return redirect()->route('lead.dashboard')->with('status', 'Lead deleted successfully');
    }


    public function exportCsv(Request $request)
    {
        $fileName = 'leads_export_' .date('YmdHis') . ".csv";
        $leads = Lead::orderBy('created_at', 'desc')->get();

        $headers = array(
            "Content-type"        => "text/csv; charset=utf-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('name', 'email', 'message', 'company', 'website', 'created_at');

        $callback = function() use($leads, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($leads as $lead) {
                $row['name']  = $lead->name;
                $row['email']    = $lead->email;
                $row['message']  = $lead->message;
                $row['company']  = $lead->company;
                $row['website']  = $lead->website;
                $row['created_at']  = $lead->created_at->toFormattedDateString();

                fputcsv($file, array($row['name'], $row['email'], $row['message'], $row['company'], $row['website'], $row['created_at']), ";");
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
