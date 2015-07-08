<?php

namespace Broadcast;


use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class MainClass extends PluginBase implements Listener{

	public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . "Broadcast version 1.0.0 loaded.");
	}

	public function onEnable(){
    if(!file_exists($this->getDataFolder() . "config.yml")) {
        @mkdir($this->getDataFolder()); 
        file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml")); 
    }
    $this->saveDefaultConfig();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $config = $this->getConfig()->getAll();
    $time = $config["Settings"]["Time"])
    //This should check if it's a positive integer
    if (ctype_digit($time){
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new BroadcastTask($this), $time);
        $this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
    } else {
    $this->getLogger()->critical("The broadcast config has in incorrect value for 'Time:'."
    }
 }

	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
	}
}
?>
