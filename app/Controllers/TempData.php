<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TempData extends BaseController
{
        public function index() { 
         $this->load->library('session'); 
      } 
}