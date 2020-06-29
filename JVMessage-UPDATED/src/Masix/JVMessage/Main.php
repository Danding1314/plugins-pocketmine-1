<?php

namemspace JVMessage;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\utils\TextFormat as C;

use JVMessage\Main;

class Main extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getLogger()->info(C::GREEN . "Plugin JVMessage has been enabled (UPDATED BY Masix!"));
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		@mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
		$this->getResource("config.yml")
	}
	
	public function onJoin(PlayerJoinEvent) {
		$player = $event->getPlayer();
		$player->sendTranslation($this->getConfig()->get("voicemessage));
	}
	
}