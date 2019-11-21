<?php

function onepage_about_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage[about_section_enable]')->value();
    if($radio_value==1) return true;
    else return false;
}
function onepage_service_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage[service_section_enable]')->value();
    if($radio_value==1) return true;
    else return false;
}

function portfolio_post_callback($control){
    $value = $control->manager->get_setting('onepage[portfolio_content_type]')->value();
    $radio_value = $control->manager->get_setting('onepage[portfolio_section_enable]')->value();
    if($value == 'post' && $radio_value==1) return true;
    else return false;
}
function portfolio_page_callback($control){
    $value = $control->manager->get_setting('onepage[portfolio_content_type]')->value();
    $radio_value = $control->manager->get_setting('onepage[portfolio_section_enable]')->value();
    if($value == 'page' && $radio_value==1) return true;
    else return false;
}
function portfolio_category_callback($control){
    $value = $control->manager->get_setting('onepage[portfolio_content_type]')->value();
    $radio_value = $control->manager->get_setting('onepage[portfolio_section_enable]')->value();
    if($value == 'category' && $radio_value==1) return true;
    else return false;
}
function portfolio_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage[portfolio_section_enable]')->value();
    if($radio_value==1) return true;
    else return false;
}
function counter_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage[counter_section_enable]')->value();
    if($radio_value==1) return true;
    else return false;
}
function counter01_radio_callback($control){
    $value = $control->manager->get_setting('onepage[counter]')->value();
    $radio_value = $control->manager->get_setting('onepage[counter_section_enable]')->value();
    if($radio_value==1 && $value==1) return true;
    else return false;
}
function counter02_radio_callback($control){
    $value = $control->manager->get_setting('onepage[counter]')->value();
    $radio_value = $control->manager->get_setting('onepage[counter_section_enable]')->value();
    if($radio_value==1 && $value==2) return true;
    else return false;
}
function counter03_radio_callback($control){
    $value = $control->manager->get_setting('onepage[counter]')->value();
    $radio_value = $control->manager->get_setting('onepage[counter_section_enable]')->value();
    if($radio_value==1 && $value==3) return true;
    else return false;
}
function counter04_radio_callback($control){
    $value = $control->manager->get_setting('onepage[counter]')->value();
    $radio_value = $control->manager->get_setting('onepage[counter_section_enable]')->value();
    if($radio_value==1 && $value==4) return true;
    else return false;
}
function author_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_author_radio_setting')->value();
    if($radio_value==1) return true;
    else return false;
}
function blog_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_blog_radio_setting')->value();
    if($radio_value==1) return true;
    else return false;
}
function blog_post_callback($control){
    $value = $control->manager->get_setting('onepage_blog_contenttype_setting')->value();
    $radio_value = $control->manager->get_setting('onepage_blog_radio_setting')->value();
    if($value == 'post' && $radio_value==1) return true;
    else return false;
}
function blog_category_callback($control){
    $value = $control->manager->get_setting('onepage_blog_contenttype_setting')->value();
    $radio_value = $control->manager->get_setting('onepage_blog_radio_setting')->value();
    if($value == 'category' && $radio_value==1) return true;
    else return false;
}

function team01_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_team_select_radio_setting')->value();
    if($radio_value==1) return true;
    else return false;
}
function team02_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_team_select_radio_setting')->value();
    if($radio_value==2) return true;
    else return false;
}
function team03_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_team_select_radio_setting')->value();
    if($radio_value==3) return true;
    else return false;
}

function onepage_testimonial_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_testimonial_radio_setting')->value();
    $choice_id = $control->manager->get_setting('onepage_testimonial_select_radio_setting')->value();
    $control_id = $control->id;
    if($radio_value==1 && $choice_id==1 && $control_id=='onepage_testimonial01_title_setting') return true;
    if($radio_value==1 && $choice_id==2 && $control_id=='onepage_testimonial02_title_setting') return true;
    if($radio_value==1 && $choice_id==3 && $control_id=='onepage_testimonial03_title_setting') return true;
    if($radio_value==1 && $choice_id==1 && $control_id=='onepage_testimonial01_description_setting') return true;
    if($radio_value==1 && $choice_id==2 && $control_id=='onepage_testimonial02_description_setting') return true;
    if($radio_value==1 && $choice_id==3 && $control_id=='onepage_testimonial03_description_setting') return true;
    if($radio_value==1 && $choice_id==1 && $control_id=='onepage_testimonial01_author_setting') return true;
    if($radio_value==1 && $choice_id==2 && $control_id=='onepage_testimonial02_author_setting') return true;
    if($radio_value==1 && $choice_id==3 && $control_id=='onepage_testimonial03_author_setting') return true;
    if($radio_value==1 && $control_id=='onepage_testimonial_select_radio_setting') return true;
    else return false;
}
function onepage_client_radio_callback($control){
    $radio_value = $control->manager->get_setting('onepage_client_radio_setting')->value();
    if($radio_value==1) return true;
    else return false;
}