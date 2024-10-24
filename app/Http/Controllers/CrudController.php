<?php

namespace App\Http\Controllers;

interface CrudController
{
    public function index();
    public function store();
    public function show();
    public function update();
    public function destroy();
}
