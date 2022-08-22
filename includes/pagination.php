<?php 
    if(!function_exists('qdn_custom_pagination')){

        function qdn_custom_pagination( WP_Query $wp_query = null, $echo = true ) {
            
            if ( $wp_query === null  ) {
                global $wp_query;
            }

            $pages = paginate_links(array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'format'       => '?paged=%#%',
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'total'        => $wp_query->max_num_pages,
                'type'         => 'array',
                'show_all'     => false,
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'next_text'    => '<i class="icon-arrow_right icon"></i>',
                'prev_text'    => '<i class="icon-arrow_left icon"></i>',
                'add_args'     => false,
                'add_fragment' => ''
            ));
             

            if ( is_array( $pages ) ) {

               $pagination = '<div class="pagination my-4 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start"><ul class="pagination_list d-flex align-items-center">';

                foreach ($pages as $page) {

                    $pagination .= '<li'.(strpos($page,'current') !== false ? ' class="active" ': '' ).'>';

                    if(strpos( $page, 'current' ) !== false ){

                        if(get_query_var('paged') > 1){

                            $pagination .= '<a>'. get_query_var('paged') .'</a>';

                        } else {

                            $pagination .= '<a>'. 1 .'</a>';

                        }

                    } else {

                        $pagination .= str_replace('class="page-numbers"', '', $page);

                    }

                    $pagination .= '</li>';

                }

                $pagination .= '</ul></div>';

                if( $echo === true ){

                   echo $pagination;

                } else {

                   return $pagination;

                }
            }
            
            return null;
        }
    }
?>