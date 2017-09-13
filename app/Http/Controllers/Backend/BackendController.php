<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class BackendController
 * @package App\Http\Controllers\Backend
 * The main class of the backend
 */
class BackendController extends Controller
{
    /**
     * BackendController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

}