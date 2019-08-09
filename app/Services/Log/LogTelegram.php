<?php

namespace App\Services\Log;

use App\Handler\TelegramBotHandler;

class LogTelegram extends TelegramBotHandler
{
    protected function write(array $record): void
    {
        $message = "<". config('app.name') ."> [{$record['level_name']}] - [{$record['datetime']->format('d/m/Y H:i:s')}]: {$record['message']}";
        if (isset($record['context']['exception'])){
            $message .= "\nArquivo: {$record['context']['exception']->getFile()} \nLinha: {$record['context']['exception']->getLine()}";
        }
        $record['formatted'] = $message;
        parent::write($record);
    }

}