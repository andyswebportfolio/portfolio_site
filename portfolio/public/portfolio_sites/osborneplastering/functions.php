<?php

function print_testimonials() {
        
    $testimonial_content = array("Osbourne Plastering are very friendly and profession service, Quality work, clean and tidy, excellent finish throughout the hole job Highly recommend this company", "The guys that did the work were very professional and worked very hard. They were always polite and respected our home. When the job was finished you did not think anybody had been in. We said to one of the workers that we would vacuum but he would not hear of it. We highly recommend this company.","They were recommended to me by a close friend. They were half the price of other company's for the same job and they done an amazing job! Couldn't have asked for better, the team are also very friendly and couldn't do enough to keep the place tidy and mess free I'll be recommending them to others and I'll be using them again in the future. Thanks for the great job.");
    
    //Testimonial names
    $testimonial_name = array("","","");
    
    for ($i=0; $i<3; $i++) {
        echo '<div class="testimonials_box">';
        echo '<p>"'.$testimonial_content[$i].'"<p><br>';
        echo '<h3>'.$testimonial_name[$i].'<h3><br>';
        echo '<a href="https://www.checkatrade.com/OsbornePlastering/" target="_blank"><img src="images/ratings_sticker.jpg" alt="rated 10 out of 10 on check a trade"/></a>';
        echo '</div>';
    }
}

?>