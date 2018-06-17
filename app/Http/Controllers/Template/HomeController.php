<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $seo = $this->getSeo();

        return view('template.index', compact('seo'));
    }

    private function getSeo()
    {
        return (object)[
            'title' => setting()->site_name . ' - ' . setting()->site_subname,
            'description' => setting()->site_description,
            'image' => setting()->site_url . '/uploads/' . setting()->image_default,
            'url' => setting()->site_url,
        ];
    }
}
