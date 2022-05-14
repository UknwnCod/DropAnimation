<?php

namespace DropAnimation\UnknownCod;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class DropAnimation extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getCommandMap()->register("", new Commands());
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveResource("config.yml");
    }

    public function onDrop(BlockBreakEvent $event)
    {
        $player = $event->getPlayer();
        $drops = $event->getDrops();
        foreach($drops as $drop){
            if($player instanceof Player){
                if($drop instanceof Item){
                    if($drop->getId() == $this->getConfig()->get("item-id") && $drop->getMeta() == $this->getConfig()->get("item-meta")){
                        $player->sendTitle($this->getConfig()->get("MESSAGE-animation"));
        }
                }
            }
        }
    }
}