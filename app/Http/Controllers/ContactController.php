<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactCreateRequest;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nbParPage = 15)
    {
        // On vérifie si nbParPage est défini
        if(isset($_GET['nbParPage']))
        {
            $nbParPage = $_GET['nbParPage'];
        }

        $contacts = $this->contactRepository->getPaginate($nbParPage);
        $links = $contacts->render();
        return view('contact/liste', compact('contacts', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactCreateRequest $request)
    {
        // dd($request->prenom);

        // Rendu du prénom
        $request->prenom = ucfirst(strtolower($request->prenom));

        $contact = $this->contactRepository->store($request->all());

        return redirect('contact')->withOk('Le contact ' . $contact->prenom . ' ' . $contact->nom . ' a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //==== Route suspendue
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //==== Route suspendue
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //==== Route suspendue
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //==== Route suspendue
    public function destroy($id)
    {
        //
    }
}
