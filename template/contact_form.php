<?php
/**
 * Created by PhpStorm.
 * User: busti
 * Date: 15-12-18
 * Time: 12:41
 */


?>

<div class="uk-width-1-1@l uk-width-1-1@m uk-width-1-1@s">
    <h3>Drop Us a line</h3>
    <form id="contact-form" class="uk-form" name="form" method="post" >
        <div class="uk-margin uk-width-2-3">
            <input class="uk-input" id="name" name="name" value="" type="text" placeholder="Full name"> </div>
        <div class="uk-margin uk-width-2-3">
            <input class="uk-input" id="email" name="email" value="" type="email" placeholder="Email"> </div>
        <div class="uk-margin uk-width-2-3">
            <input class="uk-input" id="subject" name="title" value="" type="text" placeholder="Subject"> </div>
        <div class="uk-margin">
            <textarea class="uk-textarea" id="message" name="message" rows="5" placeholder="Message"></textarea>
        </div>
        <div>
            <button class="uk-button uk-button-primary uk-float-left" id="buttonsend" type="submit" name="contact" value="envoyer">Send Message</button>
            <div class="idz-contact-loading uk-float-left uk-margin-left" style="display: none;"><span data-uk-spinner></span>Please wait..</div>
        </div>
    </form>
</div>
