<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\TestOnline;
class TestController extends Controller {
	protected $resultsDB = array();
	protected $data = array();
	protected $results = array();
	
	protected function setup(){
		for($i = 0; $i < 10; $i++){
			$data[$i] = 0;
			$results[$i] = 0;
		}
	}
	
	public function doexam(){
		for($i = 0; $i<10; $i++) {
			$id = rand(0,20);
			$temp = TestOnline::where('id','=',$id)->get()->toArray();
			$resultsDB[$i] = $temp;
		}
		//$results = DB::table('question')->get();
		return view('doExamPage')->with('data', $resultsDB);
		}
		
	public function showresults(){
		setup();
		foreach($_POST['cb'] as $row){
			//echo $row.'<br>';
			$temp = (floor($row/10))*3+$row%10;
			$data[$temp] = 1;
		}
		for($i = 0; $i < 10; $i++){
			foreach($resultsDB[$i] as $key => $value){
				if($key == 'a0' && $value == $data[$i])
					if($key == 'a1' && $value == $data[$i+1])
						if($key == 'a2' && $value == $data[$i+2])
							$results[$i/3] = 1;
			}
			$i+=3;
		}		
		return view('resultsPage')->with('res', $results);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
