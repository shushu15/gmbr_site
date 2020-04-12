<?php 
class Cms5e9271ec51b24941387998_8283c8c71f85df1f377c92a6f10fbe67Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
