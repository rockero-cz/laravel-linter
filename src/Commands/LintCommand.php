<?php

namespace Rockero\Linter\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Rockero\Linter\Data\LintError;
use Rockero\Linter\Linter;

class LintCommand extends Command
{
    public $signature = 'lint {--json}';

    public $description = 'Run linter';

    public function handle(): int
    {
        if ($this->option('json')) {
            Linter::collect()->whenNotEmpty(function (Collection $errors) {
                $this->output->write($errors->toJson());
            });

            return self::SUCCESS;
        }

        $errors = 0;

        Linter::run(function (LintError $error) use (&$errors) {
            // Run over each error generated by tlint and display in a nicer format.
            $this->output->writeLn("\n  <fg=black;bg=red;options=bold> FAIL </><fg=default> {$error->file}:{$error->line}</>");
            $this->output->writeLn("  <fg=red;options=bold>⨯</><fg=default> \e[2m{$error->message}\e[22m</>");

            $errors++;
        });

        if ($errors > 0) {
            $this->output->error($errors.' '.Str::plural('problem', $errors).' found');

            return self::INVALID;
        } else {
            $this->output->success('No problems found');

            return self::SUCCESS;
        }
    }
}
