<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use App\Http\Requests\AI\Chat;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class ChatController extends Controller
{
    public function chat(Chat $request)
    {
        $request->validated();

        $fruits = ['Worship', 'Jazz', 'Pop', 'Rock'];

        if (in_array($request->genre, $fruits)) {
            
        }else{
            return response()->json([
                'status_code' => Response::HTTP_UNAUTHORIZED,
                'status' => 'error',
                'message' => 'Genre not allowed',
            ], Response::HTTP_UNAUTHORIZED);
        }
        $prepare = "Create a playlist with 5 recent latest rating songs playlist based on ".$request->genre." genre. The format of the response dataset must be a list of dictionaries only. The list is the playlist while each dictionary inside the list represents a song only. Inside each dictionary is the song_title and the song_artists. Do not add any description, just the list of dictionaries alone.";
        $response = Http::withToken(env('OPENAI_API_KEY'))->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $prepare],
            ],
        ]);

        $answer = $response->json('choices.0.message.content');

        $clean1 = str_replace("```", "", $answer);
        $clean = str_replace("json", "", $clean1);
        $prepare = json_decode($clean);
        $result = [];
        $i = 0;
        foreach ($prepare as $answer_value) {
            $i += 1;
            $pre = (object) ['id' => $i, 'title' => $answer_value->song_title, 'artists' => $answer_value->song_artists];
            array_push($result, $pre);
        }

        return response()->json([
            "status_code" => Response::HTTP_OK, // 200
            "status" => "success",
            "message" => "User Authenticated Successfully",
            "data" => [
                'question' => $prepare,
                'answer' => $result,
            ]
        ], Response::HTTP_OK); // returning response
    }
}
