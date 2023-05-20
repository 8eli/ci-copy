<?php namespace App\Controllers;


class Mary extends BaseController
{
    public function index()
    {
        $model = new \App\Models\ArtistModel();
        
        $artists = $model->FindAll();
        $data = [
            'title' => 'Artists',
            'artists' => $artists,
        ];

        return view('mary/index', $data);
    }
    
}