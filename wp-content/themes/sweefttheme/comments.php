<?php 
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 32,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );

?>

<section class="bg-info rounded-3">
  <div class="container my-5 py-3 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex flex-start w-100">
 
              <div class="w-100">
                <h5>Comments</h5>
                <div class="form-outline">
                    <label class="form-label" for="textAreaExample">What is your view?</label>
                    <?php
                        $comment_args = array(
                            'class_submit' => 'btn btn-default submit',
                            'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Add a comment', 'noun' ) . '</label> <textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true" required="required"></textarea></p>',
                            'fields' => array(
                                'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                                '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></p>',
                                'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                                '<input id="email" name="email" class="form-control" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
                                'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                                '<input id="url" name="url" class="form-control" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
                                )
                        );

                        comment_form($comment_args);
                        wp_list_comments( $args, $comments );
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

</section>