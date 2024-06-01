<?php

declare(strict_types=1);

namespace App\Command;

use App\Component\QueryBuilderInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:report', description: 'Report generation')]
class ReportCommand extends Command
{
    public function __construct(private QueryBuilderInterface $queryBuilder)
    {
        parent::__construct();
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello world!');
        
        return Command::FAILURE;
    }
}
