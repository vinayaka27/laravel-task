<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Session;


class MyController extends Controller
{
    // for adding data to database

    public function AddPostData(Request $request)
    {
      
    //   validating the submitted data

        $this->validate($request, [
            'postname'     => 'required',
            'postdescription'      => 'required',
            'postauthor'         => 'required',
            'postdate'         => 'required',
        ]);

        $addPost = Post::create([

                    'post_name'              => $request->postname,
                    'post_description'       => $request->postdescription,
                    'post_author'            => $request->postauthor,
                    'post_created'           => $request->postdate,

                ]);
                
                //saving the data into post table

                if(isset($addPost)){
                    
                    $addPost->save();

                    //redirecting with success message

                    return back()->with('success', 'Your Post Submitted Successfully!');
                }
                else {

                    // redirecting with error message
                    
                    return redirect()->back()->with(['message' => 'Sorry something went wrong, please try again!']);
                }


    }
}
