<?php

namespace App\Http\Controllers;

use App\Models\Oefening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//oefening controller deze wordt gebruikt om de api haar GET, PUT en delete aan te sturen.
    public function scherm(){
        return view('oefeningen');
    }
    public function index(Request $request)
    {
        {

            Log::info(
            
            'oefeningen index',
            
            ['ip' => $request->ip(),
            
            'data' => $request->all()
            
            ]);
            
            if ($request->has('naam')) {
            
            $data = Oefening::where('naam', 'like', '%' . $request->naam . '%')->get();
            
            } else if ($request->has('sort')) {
            
            $data = Oefening::orderBy($request->sort)->get();
            
            } else {
            
            $data = Oefening::all();
            
            // $data = Oefening::with('functie')->get();
            
            }
            
            $content = [
            
            'success' => true,
            
            'data' => $data,
            
            ];
            
            return response()->json($content, 200);
            
            }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
    Log::info(
         'oefeningen store', 
        [ 
         'ip' => $request->ip(),
         'data' => $request->all(),
        ] 
     ); 
     $validator = Validator::make($request->all(), [
         'naam' => 'naam',
          'beschrijving' => 'beschrijving',
          'vertaling' => 'vertaling'
         ]);
          if ($validator->fails()) {
         Log::error("oefeningen toevoegen Fout");
         $content = [ 
         'success' => false, 
          'data' => $request->all(), 
          'foutmelding' => 'Data niet correct',
         ];
          return response()->json($content, 400);
         } else {
         $content = [
          'success' => true,
           'data' => Oefening::create($request
            ->only(['naam', 'beschrijving', 'vertaling'])), 
        ];
         return response()->json($content, 201); 
        } 
    }
        
    

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        Log::info(
            
            'oefeningen show',
            
            [
            
            'ip' => $request->ip(),
            
            'data' => $request->all()
            
            ]
            
            );
            
            $content = [
            
            'success' => true,
            
            'data' => Oefening::find($id),
            
            ];
            return response()->json($content, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Log::info(

            'oefeningen update',
            
            ['ip' => $request->ip(), 'oud' => $id, 'nieuw' => $request->all()]
            
            );
            
            $validator = Validator::make($request->all(), [
            
            'naam' => 'required',
            
            'beschrijving' => 'beschrijving',

            'vertaling' => 'vertaling',

            ]);
            
            if ($validator->fails()) {
            
            Log::error("oefeningen wijzigen Fout");
            
            $content = [
            
            'success' => false,
            
            'data' => $request->all(),
            
            'foutmelding' => 'Gewijzigde data niet correct',
            
            ];
            
            return response()->json($content, 400);
            
            } else {
            
            $content = [
            
            'success' => $id->update($request->all()),
            
            'data' => $request->only(['naam', 'beschrijving', 'vertaling']),
            
            ];
            
            return response()->json($content, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    
    { 
        Log::info(
             'oefeningen destroy', 
             ['ip' => $request->ip(), 'oud' => $id]
             ); 
             $id->delete();
             
             $content = [ 
            'success' => true,
            'data' => $id, 
             ]; 
             return response()->json($content, 202);
     }    

  
}
