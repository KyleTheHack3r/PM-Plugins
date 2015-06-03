<?php
namespace onevone;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerDeathEvent;
class MainClass extends PluginBase{

$game = array('game1','game2','game3');
// have 3 games running
$game1 = 1;
$game2 = 1;
$game3 = 1;
// 1 = not defined
// 2 = if set; the request to $request has been sent
// 3 = $request has accepted (teleport) 

public function onEnable(){
          $this->getLogger()->info("1v1 Enabled");
     }
 
/** @var etc */
private $etc;
    
    
 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
        if(strtolower($cmd->getName()) === "1v1") {
            if($sender->hasPermission("onevone.command.go")) {
                if(count($args) === 1) {
                    $request = $this->getServer()->getPlayer($args[0]);
                    if($request instanceof Player) {
                        $game1 = 2;
                        $request->sendMessage("<1v1> " . $sender . " has requested to 1v1 you.");
                        $request->sendMessage("<1v1> Type '/1v1 accept' to accept the request.");
                        // do some stuff here
                            $random_game = array_rand($game);
                            if($random_game == "game1"){
                                if($accepted == 1){
                                    $request->getInventory()->setContents(array(Item::get(0, 0, 0)));
                                    //setPosition (Vector3 $pos)
                                    if($death = 1){
                                     
                                         $game1 = 3;
                                    }
                                }
                                // close "game1" for other people
                            }elseif($random_game == "game2"){
                                // do the same stuff as above
                                $request->getInventory()->setContents(array(Item::get(0, 0, 0)));
                                    //setPosition (Vector3 $pos)
                                    if($death = 1){
                                     
                                         $game2 = 3;
                                    }
                                }
                            }else($random_game == "game3"){
                                // and again
                                $request->getInventory()->setContents(array(Item::get(0, 0, 0)));
                                    //setPosition (Vector3 $pos)
                                    if($death = 1){
                                     
                                         $game3 = 3;
                                    }
                            }
                    }
                    $sender->sendMessage("<1v1> Your invitation has been sent to " . $request . ".");      
                }else{
                      // no arguments have been defined
                      // pick a player at random
                      }
            }else{
                  $sender->sendMessage("<1v1> Oops! You don't have permission to do this.");
                 }
        }
 }

// respawn and death event functions here
public function onSpawn(PlayerRespawnEvent $event){
    // leave anything
    $death = 1;
}
public function onPlayerDeath(PlayerDeathEvent $event){
 // do something here
}


}
