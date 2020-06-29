<?php

namespace CustomJoinMessage;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\utils\TextFormat as C;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use CustomJoinMessage\Main;

class Main extends PluginBase implements Listener {
	
	public function onEnable(){
		$this->getLogger()->info(C::GREEN . "CustomJoinMessage is enabled!");
	}
	
	public function onDisable(){
		$this->getLogger()->info(C::RED . "CustomJoinMessage is disabled!");
	}
	
	public function onJoinPlayer(PlayerJoinEvent $event){
		$event->setJoinMessage("Player " . $event->getPlayer()->getName . "Welcome to the server, Join our Discord Server."
	}
}