<?php

class MenuLink{

	public $title;
	public $link;

	public function __construct($_title, $_link) {
		$this->title = $_title;
		$this->link = $_link;
	}
}

// Non avendo tutte le viste ho impostato i link dei menù tutti uguali ed questo causa l aggiunta della classe active

return [

    new MenuLink("Home","home"),
    new MenuLink("Comics","comics"),
    new MenuLink("Movies","home"),
    new MenuLink("TV","home"),
    new MenuLink("Games","home"),
    new MenuLink("Collectibles","home"),
    new MenuLink("Videos","home"),
    new MenuLink("Fans","home"),
    new MenuLink("News","home"),
    new MenuLink("Shop","home")

];

