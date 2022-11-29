<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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
        return response()->json([
            'reviews' => $reviews
        ]);
    }
    public function store(Request $request)
    {
        try {
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
                return response()->json([
                    'status' => 'ERROR',
                    'message' => 'Comentarios Inhabilitados'
                ]);
            }
            $review=review::create([
                'users_id'=>$user['id'],
                'star'=>$request['star'],
                'review'=>$request['review'],
                'status'=>true,
            ]);
            return response()->json([
                'status' => 'OK',
                'message' => 'Reseña creada con exito'
            ]);

        } catch (QueryException $e) {
            return response()->json([
                'status' => 'ERROR',
                'message'=>'Reseña NO creada con exito',
                'error' => $e->getMessage()
            ]);
        }
    }
}
