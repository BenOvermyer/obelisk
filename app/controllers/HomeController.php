<?php

class HomeController extends BaseController {

	public function getHome()
	{
		$recentPosts = Post::where( 'is_published', '=', true )->orderBy( 'published_at', 'desc' )->take( 4 )->remember( Config::get( 'site.cacheduration', 5 ) )->get();

		$featuredPost = $recentPosts->shift();

		$more = false;

		if ( Post::where( 'is_published', '=', true )->count() > 5 ) {
			$more = true;
		}

		$viewData = [
			'pageTitle' => 'Home',
			'featuredPost' => $featuredPost,
			'recentPosts' => $recentPosts,
			'more' => $more,
		];

		return View::make( 'home', $viewData );
	}

	public function getAdminHome()
	{
		$viewData = [
			'pageTitle' => 'Dashboard',
		];

		return View::make( 'admin.home', $viewData );
	}

}