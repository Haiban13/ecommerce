<?php
namespace App\Http\Controllers\api\v1;
use App\Http\Requests\v1\StoreUserRequest;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;
use Throwable;

class authentication {
    use AuthorizesRequests;

    public function register(StoreUserRequest $request){
        try{

            $user=User::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>Hash::make($request->password),
                
                
            ]);

            return response()->json([
                'message' => 'Registration successful!',
            ], 201); 

        }catch (\Throwable $exception) {
            // Handle specific exceptions if needed (optional)
            if ($exception instanceof \Illuminate\Database\QueryException) {
                // Handle database-related errors (e.g., unique constraint violations)
                return response()->json([
                    'message' => 'Registration failed: ' . $exception->getMessage(),
                ], 422); // Unprocessable Entity status code
            }
    
            // Handle other exceptions (generic error message)
            return response()->json([
                'message' => 'Registration failed. Please try again',
            ], 500); // Internal Server Error status code (use with caution)
        }


    }

    public function login(StoreUserRequest $request)
{
    try {
        $agent = new Agent();
        $deviceType = $agent->isMobile() ? 'mobile' : 'web';
        $user = User::where("email", $request->email)->first();
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid email or password',
            ], 401);
        }
        
        
        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->accessToken;

        if ($deviceType === 'web') {
            session(["auth" => $user, "auth_token" => $token]);
          return redirect()->route('home');
            
        }
        session(["auth" => $user, "auth_token" => $token]);
        return redirect()->route('home')->with('message', json_encode(['message' => 'Login successful',
            'user' => $user,
            'token' => $token,]));
        
        
    } catch (\Throwable $exception) {
        return response()->json([
            'message' => 'Login failed. Please try again. ' . $exception->getMessage(),
        ], 500);
    }
}


    public function editUser(Request $request,User $user){
       
        try{
            $this->authorize('update',$user);
            $user->update([
                  'name'=> $request->name ?? $user->name,
                  'email'=> $request->email ?? $user->email,
                  'password'=>!$request->password ? $user->password : Hash::make($request->password),
                 ]);
            
            return response()->json([
                'message' => 'Update successful!',
                'data' =>$user
            ], 201); 
        }catch (\Throwable $exception) {
            // Handle specific exceptions if needed (optional)
            return response()->json([
                'message' => 'Update failed. Please try again.' . $exception->getMessage(),
            ], 500); // Internal Server Error status code (use with caution)
        }
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
        try{
            session()->forget("auth");
            return redirect()->route('home');
        }catch(Throwable $exception){
            return redirect()->route('home');
            return true; 
        }
        return response()->json(['message' => 'Logged out successful']);
    }


    public function delete(){}


}