<?php

namespace App\Http\Controllers;


use App\Repository\SchoolRepository;
use App\Services\SchoolService;
use Illuminate\Http\Request;

final class SchoolsController extends Controller
{
    /**
     * @var SchoolRepository
     */
    private $schoolService;


    /**
     * SchoolsController constructor.
     * @param SchoolService $schoolService
     */
    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;

    }

    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        $schools = $this->schoolService->getFilteredSchools($request);

        return $schools;
    }
}