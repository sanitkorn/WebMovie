<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title'  =>  'required',
            'Description'  =>  'required',
            'image'  => 'required|image|max:2048'
            // 'video'  => 'requried|video'
        ]);
        $image = $request->file('image');
        // $video = $request->file('video');

        $new_name = rand() . '.' . $image-> getClientOriginalExtension();
        $new_video = rand() . '.' . $image-> getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        // $video->move(public_path('images'), $new_video);
        
        
        // if (is_numeric($postMaxSize = ini_get('post_max_size'),$max)) {

        // return (int) $postMaxSize;
        // }

        $form_data = array(
            'Title'  =>  $request->Title,
            'Description'  =>  $request->Description,
            'image'  =>  $new_name
            // 'video'  =>  $new_video
        );
        Crud::create($form_data);

        return redirect('crud')->with('success', 'Data Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        // $video_name = $request->hidden_video;
        // $video = $request->file('video');
        if($image != ''){
            $request->validate([
                'Title'  =>  'required',
                'Description'  =>  'required',
                'image'  => 'image|max:2048',
                'video'  => 'video'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            // $video->move(public_path('images'), $video_name);
        }
        else{
            $request->validate([
                'Title'  =>  'required',
                'Description'  =>  'required'
            ]);
        }
        $form_data = array(
            'Title'  =>  $request->Title,
            'Description'  =>  $request->Description,
            'image'  =>  $image_name
            // 'video'  =>  $image_name
        );
        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success', 'Data is successfully update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('crud')->with('success','Data is successfully deleted!');
    }
}
