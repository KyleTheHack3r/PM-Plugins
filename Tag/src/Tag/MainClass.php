<?php
namespace Tag;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;

class MainClass extends PluginBase{

    public function onJoin(PlayerJoinEvent $event){
        $p = $event->getName();
        if($p == "ThePMTeam"){
            $p->setNameTag("§l[§4Owner§f]§r ThePMTeam");
        }

    }
}
