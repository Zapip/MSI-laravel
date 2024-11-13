<?php

namespace App\Http\Controllers;

use App\Models\Chatbot;
use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('chatbot');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function queris(Request $request)
    {
        Chatbot::create($request->all());
        return redirect('/chatbot')->with('success', 'Chatbot berhasil dikirim');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function replies(Request $request)
    {
        $userQuery = $request->input('text');
        $chatbotResponse = Chatbot::where('queries', 'like', "%$userQuery%")->first();
        if ($chatbotResponse) {
            $response = $chatbotResponse->replies;
        } else {
            $response = "Maaf, saya tidak dapat membantu dengan pertanyaan '$userQuery'. Silakan coba pertanyaan lain.";
        }
        return response()->json(['message' => $response]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
