<?php

namespace App\Http\Controllers;

use App\Repositories\PartyRepositoryInterface;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    protected $party;

    public function __construct(PartyRepositoryInterface $party) {
        $this->party= $party;
    }
}
