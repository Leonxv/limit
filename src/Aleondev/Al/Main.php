<?php

declare(strict_types=1);

namespace Aleondev\Al;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable() {
		$this->getLogger()->info("Hello World!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "limit":
                $sender->sendMessage("§7[§4Limit§7] §cGeneriert..");
                $sender->sendMessage("§7[§4Limit§7] §cGeneriert...");
                $sender->sendMessage("§7[§4Limit§7] §cGeneriert....");
                $sender->sendMessage("§7[§4Limit§7] §cGeneriert.....");
                $sender->sendMessage("§7[§4Limit§7] §cGeneriert......");
                $sender->sendMessage("§7[§4Limit§7] §cGeneriert.......");
                $sender->sendMessage("§7[§4Limit§7]§cDas Limit liegt bei");
                $sender->sendMessage("§7[§4Limit§7] §e" .rand(1, 100000). "§e $");

				return true;
			default:
				return false;
		}
	}

	public function onDisable() {
		$this->getLogger()->info("Bye");
	}
}
