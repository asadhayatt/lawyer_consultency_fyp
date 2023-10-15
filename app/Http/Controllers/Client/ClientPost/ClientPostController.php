<?php

namespace App\Http\Controllers\Client\ClientPost;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ClientPostController extends Controller
{
    public function index(){
        $posts  =   Post::with('user')->where('user_id',Auth::user()->id)->get();
        // return $posts;
        return view('client.client-post.index',get_defined_vars());
    }
    public function createPost(){
        return view('client.client-post.create-post');
    }

public function storePost(Request $request){
        // return $request;
        $request->validate([
            'message' => 'required',
            'image' => 'required | mimes:png,jpg'
        ]);
        
        if($request->hasFile('image')){
            // return $request->image->getClientOriginalExtension();
            $filename = time() . $request->file('image')->getClientOriginalName();
            $path = public_path('/posts');
            $request->image->move($path,$filename);

            $post = new Post();
            $post->user_id  = Auth::user()->id;
            $post->message  = $request->message;
            $post->image    = $filename;
            $post->save();

            return redirect()->to('client/posts')->with('success','Post Created Successfully!');

        }


        // return to all list url
    }

    public function editPost($id){
        $post = Post::find($id);
        return view('client.client-post.edit-post',get_defined_vars());
    }

    public function updatePost(Request $request){
        // return $request;
        $request->validate([
            'message' => 'required',
            'image' => 'mimes:png,jpg'
        ]);
        
        if($request->hasFile('image')){
            // return $request->image->getClientOriginalExtension();
            $filename = time() . $request->file('image')->getClientOriginalName();
            $path = public_path('/posts');
            $request->image->move($path,$filename);
            $data= $request->all();

            $post = Post::find($request->id);
            $post->message  = $request->message;
            $post->image    = $filename;
            $post->update();

            return redirect()->to('client/posts')->with('success','Post Updated Successfully!');

        }else{

            $post = Post::find($request->id);
            $post->message  = $request->message;
            $post->update();

            return redirect()->to('client/posts')->with('success','Post Updated Successfully!');
        }


        // return to all list url
    }

    public function delete($id){
        Post::find($id)->delete();
        return redirect()->back()->with('success','Post Deleted Successfully!');
    }
}
