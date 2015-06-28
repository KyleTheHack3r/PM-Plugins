<?php

namespace Main;

// use pocketmine..... idk

class MainClass extends PluginBase implements Listener{
    public function onEnable(){
        // get from config soon
        $x = "500";
        $y = "10";
        $z = "500";
        $id = "1";
        $meta = "1";
        $this->getServer->getDefaultLevel()->setBlock(new Vector3($x, $y, $z), Item::get($id, $meta));
    }
}
