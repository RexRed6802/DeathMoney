<?php

namespace DeathMoney;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\Position;
use pocketmine\level\particle\PortalParticle;
use pocketmine\level\particle\ExplodeParticle;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use onebone\economyapi\EconomyAPI;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener {

 public function onEnable() {
 $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
 }

public function onJoin(PlayerJoinEvent $event){    //不要在意
		$player = $event->getPlayer();
 }

 public function onDeath(PlayerDeathEvent $event) {
$player = $event->getEntity();
$money = 30;
EconomyAPI::getInstance()->reducemoney($player->getName(),$money);
 }
}




