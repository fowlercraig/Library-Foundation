<?php

//Was there a book ordered in an order
function book_ordered($order_id) {
	$book_ordered = "No";
	$order = new WC_Order( $order_id );
	$items = $order->get_items();
	foreach($items as $item) {
		
		$terms = get_the_terms( $item['product_id'], 'product_cat' );
		foreach ($terms as $term) {
			if(substr($term->slug,0,4) === "book") {
				$book_ordered = "Yes";
				break;
			}
		}
	}
	return $book_ordered;
	
}
