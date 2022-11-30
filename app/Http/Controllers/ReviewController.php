<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews=review::whereHas('users',function ($query)
        {
            $query->where('status',true);
        })
        ->with('users')
        ->where('status',true)
        ->orderBy('star','DESC')
        ->take(10)
        ->get();
        return view('pages.home', ['reviews' => $reviews]);
        // return response()->json([
        //     'reviews' => $reviews
        // ]);
    }
    public function store(Request $request)
    {
        // dd($request);
        try {
            // return $request;
            $clave= config('services.recaptcha.secret');
            $token= $request['token'];
            $action= $request['action'];
            // return (['secret'=>$clave,'response'=>$token]);
            $respuesta=Http::post('https://www.google.com/recaptcha/api/siteverify?'.http_build_query(['secret'=>$clave,'response'=>$token]));
            // return($respuesta);
            if ($respuesta['success'] == 1 && $respuesta['score'] >= 0.5) {
                if ($request['phone']==null || $request['name']==null || $request['star']==null || $request['review']==null) {
                    return response('Error al crear review',500);
                }else {
                    $user=User::where('phone',$request['phone'])->first();
                    if (!$user) {
                        $user=User::create([
                            'name'=>$request['name'],
                            'phone'=>$request['phone'],
                            'email'=>$request['email'],
                            'status'=>true,
                        ]);
                        $review=review::create([
                            'users_id'=>$user['id'],
                            'star'=>$request['star'],
                            'review'=>$request['review'],
                            'status'=>true,
                        ]);
                    }
                    if (!$user['status']) {
                        return response('Comentarios Inhabilitados',500);
                    }
                    $review=review::create([
                        'users_id'=>$user['id'],
                        'star'=>$request['star'],
                        'review'=>$request['review'],
                        'status'=>true,
                    ]);
                    return response('Review creada con exito',200);
                }
            }else{
                return response('Eres un Robot',500);
            }

        } catch (QueryException $e) {
            return response($e->getMessage(),500);
        }
    }
}
