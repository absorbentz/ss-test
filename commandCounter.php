<?php 

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class counterCommand extends ContainerAwareCommand
{
//fetch feeds
$instagram_feed = $this->getContainer()->get('instagram')->getRecentPosts(100);

//run through counter

//display results



}