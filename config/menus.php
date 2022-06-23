<?php

class MenuLink{

	public $title;
	public $link;

	public function __construct($_title, $_link) {
		$this->title = $_title;
		$this->link = $_link;
	}
}

return [

    new MenuLink("Characters","#"),
    new MenuLink("Comics","#"),
    new MenuLink("Movies","#"),
    new MenuLink("TV","#"),
    new MenuLink("Games","#"),
    new MenuLink("Collectibles","#"),
    new MenuLink("Videos","#"),
    new MenuLink("Fans","#"),
    new MenuLink("News","#"),
    new MenuLink("Shop","#")

];

