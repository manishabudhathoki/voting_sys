<?php

namespace App\Http\Controllers;

use App\Repositories\CandidateRepositoryInterface;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    protected $candidate;

    public function __construct(CandidateRepositoryInterface $candidate) {
        $this->candidate= $candidate;
    }
}
