<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    // protected $prefixView = 'admin.posts';
    // protected $className = 'App\Post';
    // protected $list = 'posts';
    // protected $each = 'post';

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data[$this->list] = $this->className::all();
        return view($this->prefixView . '.index', $data);
    }

    public function create()
    {
        $data[$this->each] = new $this->className();
        return view($this->prefixView . '.create', $data);
    }

    public function show($id)
    {
        $data[$this->each] = $this->className::find($id);
        return view($this->prefixView . '.show', $data);
    }

    public function edit($id)
    {
        $data[$this->each] = $this->className::find($id);
        return view($this->prefixView . '.edit', $data);
    }
}
