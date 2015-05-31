<?php
namespace TC;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
class MainClass extends PluginBase{

 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
        if(strtolower($cmd->getName()) === "tag") {
            if($sender->hasPermission("tag.command.set")) {
                if(count($args) === 1) {
                    $tag = $args[0];
                    $name = $sender->getName();
                    $sender->setNameTag("[$tag] $name");
                    $sender->sendMessage("<TAG> You have changed your tag to " . $tag . "Enjoy.");      
                }
            }
        }
 }
}
