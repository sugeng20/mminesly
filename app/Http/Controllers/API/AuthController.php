<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'nis_nik' => 'required',
                'password' => 'required',
            ]);

            if ($validate->fails()) {
                return ResponseFormatter::error([
                    'message' => 'Ada kesalahan di input',
                    'error' => $validate->errors()->first()
                ], $validate->errors()->first(), 422);
            }

            $credentials = request(['nis_nik', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'NIS/NIK dan Password tidak sama'
                ], 'Authentication Failed', 500);
            }

            $user = User::where('nis_nik', $request->nis_nik)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('token-auth')->plainTextToken;

            $profile = $user;
            return ResponseFormatter::success([
                'access_token'  => $tokenResult,
                'token_type'    => 'Bearer',
                'user'          => $profile,
            ], 'authenticated', 200);
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Ada Kesalahan di server',
                'error'   => $error
            ], 'Authentication Failed', 500);
        }
    }
}
