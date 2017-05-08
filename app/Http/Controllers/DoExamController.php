<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\TestOnline;
class DoExamController extends Controller {
	//public static $instance;
//	public static function getInstance()
//    {
//        if (null === static::$instance) {
//            static::$instance = new static();
//        }
//        
//        return static::$instance;
//    }
	
	protected $resultsDB = array();
	protected $data = array();
	protected $results = array();

	public function __construct(){
		for($i = 0; $i<10; $i++) {
			$id = rand(0,20);
			$temp = TestOnline::where('id','=',$id)->get()->toArray();
			$this->resultsDB[$i] = $temp;
		}
		for($i = 0; $i < 10; $i++){
			$t = $i*3;
			$this->data[$t] = false;
			$this->data[$t+1] = false;
			$this->data[$t+2] = false;
			$this->results[$i] = 0;
		};
	}
	public function doexam(){
		return view('doExamPage')->with('data', $this->resultsDB);
		}
		
	public function showresults(){
		
		foreach($_POST['cb'] as $row){
			//echo $row.'<br>';
			$temp = (floor($row/10))*3+$row%10;
			$this->data[$temp] = true;
			
		}
		
		for($i = 0; $i < 10; $i++){
			$t =$i*3;
			foreach($this->resultsDB[$i] as $row)
				foreach($row as $key => $value){
					echo ($key."=>".$value.'<br>');
					if($key == "a0" && $value == $this->data[$t])
						if($key == "a1" && $value == $this->data[$t+1])
							if($key == "a2" && $value == $this->data[$t+2])
								//echo "<br><br>";
								$results[$i] = 1;
				}
		}		
		return view('resultsPage')->with('res', $this->results);
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
