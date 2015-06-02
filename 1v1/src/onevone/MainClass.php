<?php
namespace onevone;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
class MainClass extends PluginBase{

$game = array('game1','game2','game3');
// have 3 games running

 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
        if(strtolower($cmd->getName()) === "1v1") {
            if($sender->hasPermission("onevone.command.go")) {
                if(count($args) === 1) {
                    $request = $this->getServer()->getPlayer($args[0]);
                    if($request instanceof Player) {
                        $request->sendMessage("<1v1> . $sender . " has requested to 1v1 you.");
                        $request->sendMessage("<1v1> Type '/1v1 accept' to accept the request.");
                        // do some stuff here
                        /*
                            $random_game = array_rand($game);
                            if($random_game == "game1"){
                                // teleport to game1 when $request accepts
                                // close "game1" for other people
                            }

                        */
                    }
                    $sender->sendMessage("<1v1> bla bla bla confirmation");      
                }
            }
        }
 }

// respawn and death event functions here


}
