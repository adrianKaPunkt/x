<?php 

class ContactController extends Controller {

	function defaultAction() {
		include 'view/contact-us.html';
	}

	function submitContactFormAction() {


		include 'view/contact-us-thank-you.html';
	}
}
