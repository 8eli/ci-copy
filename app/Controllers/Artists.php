<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Artists extends BaseController
{
    private $model;
    public function __construct()
    {
        $this->model = new \App\Models\ArtistModel;
    }
   
    public function new()
   
    {
        return view('Artists/new');
     }
  
     public function create()
     {
        $post = $this->request->getPost();
  
        if ($this->model->save($post)) {
           return redirect()->to("/");
        } else {
           dd($this->model->errors());
        }
  
        return view('Artists/new');
     }
  
     public function edit($id)
     {
  
        $artist = $this->model->find($id);
  
        return view('Artists/edit', $artist);
     }
  
     public function update()
     {
        $post = $this->request->getPost();
  
        if ($this->model->save($post)) {
           return redirect()->to("/");
        } else {
           dd($this->model->errors());
        }
     }
  
     public function delete($id)
     {
        if ($this->model->delete($id)) {
           return redirect()->to("/");
        }
     }

}
