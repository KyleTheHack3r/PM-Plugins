<?php
namespace Mine

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "mine"){
        if(isset($args[0])){
          if($sender->haspermission("mine.command.tp")
            $p->teleport(new Position(500,10,500,$level));
        } else {
        $sender->sendMessage("You do not have permission to teleport to that mine");
        }
        return true;
    }

    return false;
}

}
