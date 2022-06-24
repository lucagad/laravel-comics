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

    new MenuLink("Home","home"),
    new MenuLink("Comics","comics"),
    new MenuLink("Movies","movies"),
    new MenuLink("TV","tv"),
    new MenuLink("Games","games"),
    new MenuLink("Collectibles","collectibles"),
    new MenuLink("Videos","videos"),
    new MenuLink("Fans","fans"),
    new MenuLink("News","news"),
    new MenuLink("Shop","shop")

];

