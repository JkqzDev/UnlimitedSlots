<?php

declare(strict_types=1);

namespace suky\unlimitedslots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class EventListener implements Listener
{
    
    public function handleRegenerate(QueryRegenerateEvent $event): void
    {
        $query = $event->getQueryInfo();
        
        $query->setMaxPlayerCount($query->getPlayerCount() + 1);
    }
}