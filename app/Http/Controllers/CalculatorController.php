<?php

namespace App\Http\Controllers;


use App\Http\Requests\CalculatorRequest;
use App\Repositories\CalculatorRepository;
use Exception;
use Illuminate\Http\Request;

use Illuminate\View\View;

class CalculatorController extends Controller
{

    protected $calculator;

    public function __construct(CalculatorRepository $calculator)
    {
        $this->calculator = $calculator;
    }
    function index(): View
    {
        return view('calculator');
    }
    function calculate(CalculatorRequest $request): View
    {
        $result = "";
        try {
            $result = $this->calculator->{$request->operation}($request->input('num1'), $request->input('num2'));
        } catch (Exception $ex) {
            $result = $ex->getMessage();
        } finally {
            return view("calculator", ["result" => "result of $request->operation between {$request->input('num1')} and {$request->input('num2')} : $result"]);
        }
    }
}
