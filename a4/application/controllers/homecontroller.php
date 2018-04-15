<?php
class HomeController extends Controller{
public function index(){
$feed = 'http://fox59.com/feed';

$rss = new RssDisplay($feed);
$feed_data = $rss->getFeedItems();

$channel_title = $feed_data->channel->title;
$title_title = $feed_data->item->title;

$this->set('rss_title', $channel_title);
$this->set('article', $title_title);
}
}
?>