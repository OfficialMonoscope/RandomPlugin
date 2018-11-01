<?php
namespace Random\myPlugin;

use pocketmine\plugin\pluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
  plugin function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
    switch($command->getName()){
      case "random1":
          $sender->sendMessage("maxxie is cool");
          return true;
          break;

      case "random2":
          $sender->sendMessage("I am cool");
          return true;
          break;

      case "random3":
          $sender->sendMessage("Chicken Nuggets");
          return true;
    }
  }
}
