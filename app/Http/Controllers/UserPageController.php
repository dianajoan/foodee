<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Session;
use Image;
use File;
use Auth;

class UserPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.index', compact(['user']));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $user = Auth::user();
        return view('user.index', compact(['user']));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('user.settings.profile', compact(['user']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update_image(Request $request)
    {
        if ($request->hasFile('profile_image')) {
            // delete old image
            $oldUser = Auth::user();
            if ($oldUser->profile_image != 'profile.jpg' || $oldUser->profile_image != 'profile.png') {
                $pathToImage = public_path('files/profile/images/').$oldUser->profile_image;
                File::delete($pathToImage);
            }
            $user_image = $request->file('profile_image');
            $filename = time() . '.' . $user_image->getClientOriginalExtension();
            Image::make($user_image)->resize(300,300)->save( public_path('/files/profile/images/' . $filename) );
            $user = Auth::user();
            $user->profile_image = $filename;
            $user->save();
        }
        elseif(!$request->hasFile('profile_image')) 
        {
            $user = Auth::user();
            return redirect()->route('profile',compact(['user']))->with('warning','It looks like nothing was uploaded.');
        }
        return redirect()->route('profile',compact(['user']))->with('success','Profile Picture Updated Successfully!');
    }

    public function getProfile() {
        //return view('user.profile');

        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }
}