<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::latest()->paginate(100);
        return view('index', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function homepage()
    {
        $data = Crud::latest()->paginate(100);
        return view('homepage', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function chinese()
    {
        $data = Crud::latest()->paginate(100);
        return view('chinese', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function korean()
    {
        $data = Crud::latest()->paginate(100);
        return view('korean', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function thai()
    {
        $data = Crud::latest()->paginate(100);
        return view('thai', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function anime()
    {
        $data = Crud::latest()->paginate(100);
        return view('anime', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    // Admin page(crud)
    public function khmerdubbed()
    {
        $data = Crud::latest()->paginate(100);
        return view('khmerdubbed', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function animate()
    {
        $data = Crud::latest()->paginate(100);
        return view('animate', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function chinesedrama()
    {
        $data = Crud::latest()->paginate(100);
        return view('chinesedrama', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function koreandrama()
    {
        $data = Crud::latest()->paginate(100);
        return view('koreandrama', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function thaidrama()
    {
        $data = Crud::latest()->paginate(100);
        return view('thaidrama', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
    }

    public function animation()
    {
        $data = Crud::latest()->paginate(100);
        return view('animation', compact('data'))
                ->with('i',(request()->input('page',1)- 1)* 5);
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
            'Description'  => 'required',
            'image'  =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'),$new_name);
        $form_data = array(
            'Title'  =>  $request->Title,
            'Description'  =>  $request->Description,
            'image'  =>  $new_name,
            'Type'  => $request->Type
        );
        Crud::create($form_data);

        return redirect('crud')->with('success', 'Data Added successfully.');
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
        if($image !=''){
            $request->validate([
                'Title'  =>  'required',
                'Description'  =>  'required',
                'image'  =>  'image|max:2048',
                'Type'  =>  'required'
            ]);
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'),$image_name);
        }
        else{
            $request->validate([
                'Title'  =>  'required',
                'Description'  =>  'required',
               
            ]);
        }

        $form_data = array(
            'Title'  =>  $request->Title,
            'Description'  =>  $request->Description,
            'image'  =>  $image_name,
            'Type'  =>  $request->Type
        );

        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success', 'Data is successfully updated.');
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
        return redirect('crud')->with('success', 'Data is successfully deleted.');
    }
} 
