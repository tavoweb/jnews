<?php
/**
 * @author Jegtheme
 */
namespace JNews;

/**
 * Class Tree Node
 */
Class TreeNode
{
    public $tag;
    public $start;
    public $end;

    /**
     * @var array TreeNode
     */
    public $child = array();
    public $parent;

    public static $self_closing = array(
        'area',
        'base',
        'br',
        'col',
        'command',
        'embed',
        'hr',
        'img',
        'input',
        'keygen',
        'link',
        'menuitem',
        'meta',
        'param',
        'source',
        'track',
        'wbr'
    );

    public function __construct($tag = null, $start = null, $parent = null)
    {
        $this->tag = $tag;
        $this->start = $start;
        $this->parent = $parent;
    }

    /**
     * @param $tag
     * @param $start
     * @return TreeNode
     */
    public function create_child($tag, $start)
    {
        $total = sizeof($this->child);
        $this->child[$total] = new TreeNode($tag, $start, $this);

        if(in_array($tag, TreeNode::$self_closing)) {
            $this->end = $this->calculate_end_tag($start, $this->child[$total]);
            return $this;
        } else {
            return $this->child[$total];
        }
    }

    /**
     * @param $begin
     * @param TreeNode $child
     * @return int
     */
    public function calculate_end_tag($begin, $child = null)
    {
        if($child === null) {
            $end = strpos(ContentTag::get_content(), '>', $begin);
        } else {
            $end = strpos(ContentTag::get_content(), '>', $begin);
        }

        return ++$end;
    }

    /**
     * @param $end
     * @return TreeNode
     */
    public function end_child($end)
    {
        $this->end = $this->calculate_end_tag($end);
        return $this->parent;
    }
}