<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Comment;

/**
 * Class JNews_CommentNumber
 */
Class CommentNumber
{
    /**
     * @var CommentNumber
     */
    private static $instance;

    /**
     * @var string
     */
    private $comment_type;
    private $comment_expired;

    /**
     * @var string
     */
    private $cache_key = "jnews_comments_number";

    /**
     * @return CommentNumber
     */
    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
        $this->comment_type         = get_theme_mod( 'jnews_comment_type', 'wordpress' );
        $this->comment_expired      = get_theme_mod( 'jnews_comment_cache_expired', '1' );
    }

    /**
     * Return number of post comments
     * 
     * @param  int $post_id
     * 
     * @return int
     * 
     */
    public function comments_number( $post_id )
    {
        if ( $this->comment_type === 'wordpress' )
        {
            $comment_number = get_comments_number( $post_id );
        } else {
            $comment_number = $this->get_comments_cache( $post_id );
        }

        return $comment_number;
    }

    /**
     * Comment cache
     * 
     * @param  int $post_id
     * 
     * @return int
     * 
     */
    protected function get_comments_cache( $post_id = 0 )
    {
        $post_id         = $this->get_post_id( $post_id );
        $comment_expired = $this->comment_expired * 60 * 60;

        // @todo : development
        // delete_post_meta( $post_id, $this->cache_key );

        $data_comment = get_post_meta( $post_id, $this->cache_key, true );
        $current_time = current_time('timestamp');
        $number       = 0;
        $add_data     = true;

        if ( ! empty( $data_comment[$this->comment_type] ) )
        {
            if ( $data_comment[$this->comment_type]['expired'] < ( $current_time - $comment_expired ) )
            {
                // expired
	            $data_comment[$this->comment_type]['expired'] = current_time('timestamp');
	            $data_comment[$this->comment_type]['number']  = $this->fetch_data( $post_id, $this->comment_type );

	            $this->save_result( $post_id, $data_comment );
            }

            $number = $data_comment[$this->comment_type]['number'];

        } else {
            $fetch_data = $this->fetch_data( $post_id, $this->comment_type );

            $number = $fetch_data;

            $data_comment = array(
                $this->comment_type => array(
                    'expired' => current_time('timestamp'),
                    'number'  => $fetch_data,
                )
            );

            $this->save_result( $post_id, $data_comment );
        }

        return $number;
    }

    /**
     * Fetch data post comment
     * 
     * @param  int    $post_id
     * @param  string $type   
     * 
     * @return int
     *      
     */
    protected function fetch_data( $post_id, $type )
    {
        $comment_number = 0;

        if ( $type === 'facebook' )
        {
	        $fb_token   = jnews_get_option('jnews_comment_facebook_token', '');
	        $fb_token   = ! empty( $fb_token ) ? '&access_token=' . $fb_token : '';
            $url        = 'https://graph.facebook.com/?id=' . apply_filters( 'jnews_get_permalink', get_permalink( $post_id ) ) . $fb_token;
            $result     = $this->make_request( $url );

            if ( !empty( $result['share'] ) )
            {
                $comment_number = $result['share']['comment_count'];
            }
        } 

        if ( $type === 'disqus' ) 
        {
            $api_key   = get_theme_mod( 'jnews_comment_disqus_api_key', '' );
            $shortname = get_theme_mod( 'jnews_comment_disqus_shortname', '' );
            $url       = 'https://disqus.com/api/3.0/threads/set.json?api_key=' . urlencode( $api_key ) . '&forum=' . urlencode( $shortname ) . '&thread:link=' . apply_filters( 'jnews_get_permalink', get_permalink( $post_id ) ); // alternatif use details.json

            $result    = $this->make_request( $url );

            if ( !empty( $result['response'][0]['posts'] ) )
            {
                $comment_number = $result['response'][0]['posts'];
            }
        }

        return $comment_number;
    }

    /**
     * Save post meta data for post comment
     * 
     * @param  int   $post_id
     * @param  array $data   
     *          
     */
    protected function save_result( $post_id, $data )
    {
        update_post_meta( $post_id, $this->cache_key, $data );
    }

    /**
     * Make request
     * 
     * @param  string $url
     * 
     * @return bool|array (default:bool)
     * 
     */
    protected function make_request( $url )
    {
        $response = wp_remote_get( $url );

        if ( !is_wp_error( $response ) && $response['response']['code'] == '200' )
        {
            $result = json_decode( $response['body'], true );

            return $result;
        }

        return false;
    }

    /**
     * Get post id
     * 
     * @param  int $post_id
     * 
     * @return int
     * 
     */
    protected function get_post_id( $post_id )
    {
        $post = get_post( $post_id );

        if ( $post )
        {
            $post_id = $post->ID;
        }

        return $post_id;
    }
}