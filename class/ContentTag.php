<?php
/**
 * @author Jegtheme
 */
namespace JNews;

/**
 * Class Tree Node
 */
Class ContentTag
{
    /**
     * @var TreeNode
     */
    private $pointer;
    private $root;
    private static $content;

    public function __construct($content)
    {
        self::$content = $content;
        $this->populate_tag();
    }

    public function find($tag, $number)
    {
        $line = 0;

        foreach($this->pointer->child as $child)
        {
            if($child->tag === $tag) {
                $number--;
            }

            if($number === 0) {
                return $child->end;
            }
        }

        return $line;
    }

    public function total($tag)
    {
        $number = 0;

        foreach($this->pointer->child as $child)
        {
            if($child->tag === $tag) {
                $number++;
            }
        }

        return $number;
    }

    protected function populate_tag()
    {
        $this->pointer = new TreeNode();
        $this->root = $this->pointer;

        preg_match_all('/<[^>]*>/im', self::$content, $matches, PREG_OFFSET_CAPTURE);

        foreach($matches[0] as $key => $match)
        {
            $tag = $this->get_tag($match[0]);

            if(!$this->is_closed_tag($match[0]))
            {
                $this->register_tag($tag, $match[1]);
            } else {
                $this->reset_tag($match[1]);
            }
        }
    }

    public static function get_content()
    {
        return self::$content;
    }

    protected function is_closed_tag($tag)
    {
        return substr($tag, 0, 2) === '</';
    }

    protected function get_tag($html)
    {
        preg_match('/<\/?([^\s^>]+)/', $html, $tag);
        return $tag[1];
    }

    protected function register_tag($tag, $start)
    {
        $this->pointer = $this->pointer === null ? $this->root : $this->pointer;
        $this->pointer = $this->pointer->create_child($tag, $start);
    }

    protected function reset_tag($end)
    {
        $this->pointer = $this->pointer === null ? $this->root : $this->pointer;
        $this->pointer = $this->pointer->end_child($end);
    }
}