<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\MedicalUser;


class MedicalUserController extends Controller
{
     public function registerMedicalUser(Request $data)
    {
        // Validate the incoming request data
        $validator = Validator::make($data->all(), [
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255', // Only letters and spaces allowed
            'email' => 'required|string|email|max:255|unique:users',  // Valid email, unique
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            ],         // Minimum 8 chars, must match confirmation
            'file' => 'nullable|image|max:5120',                      // Optional image, max size 2MB
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name may only contain letters and spaces.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'The password field is required.',
          
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.regex' => 'The password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'file.image' => 'The file must be an image.',
            'file.max' => 'The image size must not exceed 5MB.',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->route('medicalsignUp') // Use named route
                ->withErrors($validator)      // Pass validation errors back to the view
                ->withInput();                // Keep old input for re-entry
        }
    
        // Create a new user instance
        $newuser = new MedicalUser();
        $newuser->name = $data->input('name');
        $newuser->email = $data->input('email');
        $newuser->password = Hash::make($data->input('password')); // Hash the password
    
        // Handle file upload if exists
        if ($data->hasFile('file')) {
            // If the user uploads a file, process and save it
            $fileName = time() . '_' . $data->file('file')->getClientOriginalName();
            $filePath = $data->file('file')->move(public_path('uploads/profiles/'), $fileName);
            $newuser->picture = $fileName;
        } else {
            // Assign a default image if no file is uploaded
            $newuser->picture = 'defaultprofile.png'; // Ensure this file exists in 'public/uploads/profiles/'
        }
        
    
        $newuser->type = "Admin";
    
        // Save the user and redirect with success message
        if ($newuser->save()) {
            return redirect()->route('medicallogin')->with('success', 'Congratulations! Your account is ready.');
        }
    
        // Return to sign-up page with a generic error message if saving fails
        return redirect()->route('medicalsignUp')->with('wrong', 'Something went wrong. Please try again.');
    }




     public function loginMedicalUser(Request $data)
    {
        $user = MedicalUser::where('email', $data->input('email'))->first();

        if ($user && Hash::check($data->input('password'), $user->password)) {
            session()->put('admin_id', $user->id);
            session()->put('name', $user->name);
            session()->put('email', $user->email);
            session()->put('role', $user->type ?? 'Admin');

            if ($user->type == 'Admin') {
                return redirect()->route('display.medical.Dashboard'); // Use named route
            }

            else{
                session()->put('admin_id', $user->id);
            return redirect()->route('display.medical.Dashboard');
            }
        }

        return redirect()->route('medicallogin')->with('error', 'Email or password is incorrect.');
    }

    
    //Logout
         public function MedicaladminLogout(Request $request)
    {
        $request->session()->forget('admin_id');
    
    
        // Redirect to the login page
        return redirect()->route('medicallogin');
    }



}
