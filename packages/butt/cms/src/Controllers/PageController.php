<?php

namespace Butt\Cms\Controllers;

use App\Http\Controllers\Controller;
use Butt\Cms\Models\Page;

class PageController extends Controller {

    /**
     * Get a list of all pages
     * 
     * @return array
     */
    public function index() {
        $data['pages'] = Page::get();
        
        return view('cms::page.index', $data);
    }
    
    /**
     * Get a single page
     * 
     * @return array
     */
    public function show($page) {
        return [
            ['title' => 'Page 1']
        ];
    }

}
