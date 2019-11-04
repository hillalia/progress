<?php
function apiResponseBuilder($code, $data)
{
	if ($code==200) {
		$response['status'] = 200;
		$response['data'] = $data;
	}else if($code==400){
		$response['status'] = 400;
		$response['data'] = $data;
	}else if($code==404){
		$response['status'] = 404;
		$response['data'] = $data;
	}else if($code==401){
		$response['status'] = 401;
		$response['data'] = $data;
	}else if($code==405){
		$response['status'] = 405;
		$response['data'] = $data;
	}else{
		$response['status'] = 500;
		$response['data'] = $data;
	}

	return response()->json($response, $code);
}

function apiResponseValidationFails($mesaage=null, $errors=null, $status=422){
	return response()->json([
		'mesaage' => $mesaage,
		'status' => $status,
		'data' => [
			'errors' => $errors
		]
	], $status);
}

function apiResponseSuccess($message=null, $data=null, $status=200){
	return response()->json([
		'message' => $message,
		'status' => $status,
		'data' => $data
	], $status);
}

function apiResponseErrors($message=null, $data=null, $status=401){
	return response()->json([
		'message' => $message,
		'status' => $status,
		'data' => $data
	], $status);
}