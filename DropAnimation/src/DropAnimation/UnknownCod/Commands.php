<?php

namespace DropAnimation\UnknownCod;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class Commands extends Command
{
    public function __construct()
    {
        parent::__construct("dropanimation", "DropAnimation Infos", "/dropanimation", ["da"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player){
            $sender->sendMessage("§bAuthor: §3UnknownCod \n§bName: §3DropAnimation \n§bVersion: §3v.1.0.0");
        }else{
            $sender->sendMessage("Looks like you aren't a player");
        }
    }
}