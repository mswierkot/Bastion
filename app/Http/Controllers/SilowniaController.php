<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Silownia;


class SilowniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function publicHomePage()
     {
         $silownias = Silownia::paginate(100);
        
         return view('pages/silownia-harmonogram',    ['silownias'=>$silownias]);
     }
      
        public function index()
        {
        $silownias = Silownia::latest()->paginate(5);
        return view('admins.indexs',compact('silownias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.creates');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title',
            'body',
        ]);
        Silownia::create($request->all());
        return redirect()->route('silownias/publicHomePageTemplate')
                        ->with('success','Article created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $silownia = Silownia::find($id);
        return view('admins.shows',compact('silownia'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $silownia = Silownia::find($id);
        return view('admins.edits',compact('silownia'));
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
        request()->validate([
            'title',
            'body',
        ]);
        Silownia::find($id)->update($request->all()); 
        return redirect()->away('/silownia-harmonogram');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Silownia::find($id)->delete();
        return redirect()->route('admins.index')
                        ->with('success','Article deleted successfully');
    }
}