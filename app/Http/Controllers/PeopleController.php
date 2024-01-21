<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class PeopleController extends Controller
{
     
     public function index(): JsonResponse
     {
         return response()->json(People::all(), 200);
     }

     public function show($id): JsonResponse
     {
        $person = People::find($id);

         return response()->json($person, 200);
     }

     public function update(Request $request, $id)
    {
        $person = People::find($id);

        $data = $request->validate([

            'city' => 'required',
            'country' => 'required'
            
        ]);

        $person->update($data);

        return response()->json($person, 200);
    }

    public function delete($id)
    {
        $person = People::find($id);

        $person->delete();
    }

    public function create(Request $request)
    {
        $data = $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required'

        ]);

        $people = People::create($data);

        return response()->json($people, 201);
    }
 
}