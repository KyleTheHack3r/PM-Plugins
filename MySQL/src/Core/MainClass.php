<?php
namespace Core;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerDeathEvent;

class MainClass extends PluginBase implements Listener{

public function onEnable() {
    $config = $this->plugin->getConfig()->get("MySQLi Details");

    $mysql_hostname = $config["host"];
    $mysql_user = $config["user"];
    $mysql_password = $config["password"];
    $mysql_database = $config["database"];
    if($mysql_hostname == "null"){
         $this->getLogger()->warning("You haven't defined a MySQL host!");
    }
     if($mysql_user == "null"){
         $this->getLogger()->warning("You haven't defined a MySQL user!");
    }
     if($mysql_database == "null"){
         $this->getLogger()->warning("You haven't defined a MySQL database!");
    }

    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password);
    mysqli_select_db($bd, $mysql_database);
}

public function onJoin(PlayerJoinEvent $event) {
    $player = $event->getEntity();
    $name = trim(strtolower($player->getName()));

    $sql = "UPDATE joins SET test = 'hello world' WHERE name='".$name."'";
    $result = mysqli_query($bd, $sql);
}
}
