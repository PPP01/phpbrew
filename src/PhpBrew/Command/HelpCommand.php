<?php

namespace PhpBrew\Command;

use CLIFramework\Command\HelpCommand as BaseHelpCommand;

class HelpCommand extends BaseHelpCommand
{
    public function execute()
    {
        $args = func_get_args();

        if (empty($args)) {
            $headline = <<<'EOS'
  ______ _   _ ____________
  | ___ \ | | || ___ \ ___ \
  | |_/ / |_| || |_/ / |_/ /_ __ _____      __
  |  __/|  _  ||  __/| ___ \ '__/ _ \ \ /\ / /
  | |   | | | || |   | |_/ / | |  __/\ V  V /
  \_|   \_| |_/\_|   \____/|_|  \___| \_/\_/
EOS;
            $this->logger->write($this->formatter->format($headline . "\n", 'strong_white'));
        }

        return parent::execute(...$args);
    }
}
