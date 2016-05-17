<?php 
	function getHolidayDeals($keyword, $category = 'holiday-deals', $destination)
	{
		if($destination == 5) {
			$query = new \WP_Query(array(
	            'cat' => $category,
	            's' => $keyword,
	            'posts_per_page' => 10,
	            'orderby' => 'date',
	            'order'   => 'DESC'
	        ));
		} else {
	        $query = new \WP_Query(array(
	            'category__and' => array($category, $destination),
	            's' => $keyword,
	            'posts_per_page' => 10,
	            'orderby' => 'date',
	            'order'   => 'DESC'
	        ));
		}
    	return $posts = $query->get_posts();     
	}

	function getCategory($category = 1, $ppp = 10000, $paged = 1)
	{	
        $query = new \WP_Query(array(
            'category__in' => $category,
            'posts_per_page' => $ppp,
            'orderby' => 'date',
            'order'   => 'DESC',
            'paged'	  => $paged
        ));
    	return $posts = $query->get_posts();
	}

	function getCategoryWithChildren($category = 1, $ppp = 10000, $paged = 1, $id = null)
	{	
        $query = new \WP_Query(array(
            'cat' => $category,
            'posts_per_page' => $ppp,
            'post__not_in' => $id,
            'orderby' => 'date',
            'order'   => 'DESC',
            'paged'	  => $paged
        ));
    	return $posts = $query->get_posts();
	}

	function getPost($slug = null, $ppp = 10)
	{	
        $query = new \WP_Query(array(
        	'name' =>  $slug,
        	'posts_per_page' => $ppp
        ));
        return $post = $query->get_posts();        
	}

	function getPage($slug = null)
	{	
        $query = new \WP_Query(array(
        	'pagename' => $slug
        ));
        return $page = $query->get_posts();        
	}