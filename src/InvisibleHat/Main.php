<?php

namespace InvisibleHat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\scheduler\PluginTask;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new Task($this), 5);
  }
}

class Task extends PluginTask{
  public function __construct(Main $plugin){
	parent::__construct($plugin);
	}

  public function onRun($tick){
    $head = $player->getInventory()->getHelmet()
    foreach($this->getServer()->getOnlinePlayers() as $player){
            if($player->hasPermission("invisiblehat")){
               $item = Item::get(298, 1);
               $item->setCustomName("Шапка-невидимка");
               $item->addEnchantment(Enchantment::getEnchantment(0)->setLevel(10));
               if($head == $item){
                 $effect = Effect::getEffect(14);
							   $effect->setDuration(999999999999999999999999999);
						     $effect->setAmplifier($effects->get("INVISIBILTY-AMPLIFIER"));
							   $effect->setVisible(false);
							   $player->addEffect($e);
               }
            }
    }
  }

}
