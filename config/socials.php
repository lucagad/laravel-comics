<?php

class SocialLink{

	public $title;
	public $image;
	public $link;

	public function __construct($_title,$_image, $_link) {
		$this->title = $_title;
        $this->image = $_image;
		$this->link = $_link;
	}
}

return [

    new SocialLink("Facebook","img/footer-facebook.png","#"),
    new SocialLink("Twitter","img/footer-twitter.png","#"),
    new SocialLink("YouTube","img/footer-youtube.png","#"),
    new SocialLink("Pinterest","img/footer-pinterest.png","#"),
    new SocialLink("Periscope","img/footer-periscope.png","#"),

];

