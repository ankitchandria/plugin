<?php
/**
 * Plugin Name: Feedback
 * Description: Feedback plugin
 * Author: Ankit
 * Author: URI: 
 * Version: 1.0.0
 * Text Domain: feedback
 * 
 */

 if( !defined('ABSPATH') )
 {
     echo 'Plugin creation in progress';
     exit;
 }

 class Feedback {

    public function __construct()
    {
        //Add shortcode
        add_shortcode('feedback-form', array($this, 'load_feedbackform'));
    }

    public function load_feedbackform()
    {?>
        <div>
            <h3><?php __('Post your feedback', 'feedback'); ?></h3>
            <p>Fill out the form below</p>
            <form id="feeback-form">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Score Rating out of 5">
                <textarea placeholder="Write any suggestions here"></textarea>
                <button type="submit" value="submit">Submit Feedback</button> 
            </form>
        </div>

     <?php }



 }

 new Feedback;