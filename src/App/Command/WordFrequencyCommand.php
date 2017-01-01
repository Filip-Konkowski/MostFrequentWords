<?php

namespace App\Command;

use App\WordFrequency;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WordFrequencyCommand extends Command
{
    
    protected function configure()
    {
        $this
            ->setName('app:word-frequency')
            ->setDescription('Prints 100 mose frequent words from file.')
            ->addArgument('filePath', InputArgument::REQUIRED, "Enter path to the file");
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $path = $input->getArgument('filePath');
        
        $file = file_get_contents($path, true);
        $wordFrequecy = new WordFrequency();
        $result = $wordFrequecy->getWordFrequency($file);
       
        $output->writeln("100 mose frequent words from file ". $path);
        $index = 1;
        foreach($result as $word => $frequency) {
            $output->writeln($index.') '.$word." -> ". $frequency);
            $index++;
        }
        
        
    }
}