<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::whereHas('users',function ($query) {
                $query->where('status',true);
            })
            ->with('users')
            ->where('status',true)
            ->orderBy('star','DESC')
            ->take(10)
            ->get();

        return view('pages.home', compact('reviews'));
    }
    public function store(Request $request)
    {
        // dd($request);
        logger($request->all());
        try {
            // return $request;
            $clave = env('SECRET_RECAPTCHA');
            $token = $request['token'];
            $url = 'https://www.google.com/recaptcha/api/siteverify?'.http_build_query(['secret'=>$clave,'response'=>$token]);

            $respuesta = Http::post($url);

            if (!($respuesta['success'] == 1 && $respuesta['score'] >= 0.5)) 
                return response()->json('Eres un Robot',  500);

            if (!($request['phone'] && $request['name'] && $request['star'] && $request['review']))
                return response()->json('Error al crear review',  500);

            $user = User::where('phone',$request['phone'])->first();
            if (!$user) {
                $user = User::create([
                    'name'=>$request['name'],
                    'phone'=>$request['phone'],
                    'email'=>$request['email'],
                    'status'=>true,
                ]);
                Review::create([
                    'users_id'=>$user['id'],
                    'star'=>$request['star'],
                    'review'=>$request['review'],
                    'status'=>true,
                ]);
            }

            if (!$user['status']) return response()->json('Comentarios Inhabilitados',  500);

            Review::create([
                'users_id'=>$user['id'],
                'star'=>$request['star'],
                'review'=>$request['review'],
                'status'=>true,
            ]);

            return response()->json('Review creada con exito',  200);
        } catch (QueryException $e) {
            return response()->json($e->getMessage(),  500);
        }
    }
}
