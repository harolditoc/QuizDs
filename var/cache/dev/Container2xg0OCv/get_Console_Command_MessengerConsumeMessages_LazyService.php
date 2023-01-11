<?php

namespace Container2xg0OCv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerConsumeMessages_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_consume_messages.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.messenger_consume_messages.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:consume', [], 'Consume messages', false, #[\Closure(name: 'console.command.messenger_consume_messages', class: 'Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand')] function () use ($container): \Symfony\Component\Messenger\Command\ConsumeMessagesCommand {
            return ($container->privates['console.command.messenger_consume_messages'] ?? $container->load('getConsole_Command_MessengerConsumeMessagesService'));
        });
    }
}
