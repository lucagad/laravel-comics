<?php

class PreFooterLink{

	public $title;
	public $image;
	public $link;

	public function __construct($_title, $_image, $_link) {
		$this->title = $_title;
		$this->image = $_image;
		$this->link = $_link;
	}
}

return [

    new PreFooterLink("Digital Comics","img/buy-comics-digital-comics.png","#"),
    new PreFooterLink("DC Merchandise","img/buy-comics-merchandise.png","#"),
    new PreFooterLink("Subscription","img/buy-comics-subscriptions.png","#"),
    new PreFooterLink("Comic Shop Locator","img/buy-comics-shop-locator.png","#"),
    new PreFooterLink("DC Power Visa","img/buy-dc-power-visa.svg","#")

];

