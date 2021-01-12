<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function home()
	{
        $data = [
            'title' => 'Home'
        ];
		return view('pages/home', $data);
	}

	public function about_me()
	{
		$data = [
			'title' => 'About Me'
		];
		return view('pages/about_me', $data);
	}

	public function contact_us()
	{
		$data = [
			'title' => 'Contact Us'
		];
		return view('pages/contact_us', $data);
	}
}
