<?php

class OneLineTheme extends Theme
{
		/**
		 * Manipulate the controls on the publish page
		 *
		 * @param FormUI $form The form that is used on the publish page
		 * @param Post $post The post that's being edited
		 */
		public function action_form_publish( $form, $post ) {

			// remove the media silos
			$form->remove( $form->silos );

			// change the 'content' textarea to one line of text
			$form->content->template = 'admincontrol_text';
			$form->content->class = array_diff( $form->content->class, array( "resizable" ) );

			// Style 'content' the same as the title
			$form->content->class[] = 'important';

			// relabel 'content' as 'URL'
			$form->content->caption = 'URL';
/*
			// validate the URL as a URL
			$form->content->add_validator( 'validate_url' );
*/

			// Create the 'link text' field, style it the same as the other two
			$form->append( 'text', 'link_text', 'null:null', 'Link Text', 'admincontrol_text' );
			$form->link_text->class[] = 'important';
			$form->link_text->value = $post->info->link_text;
			$form->link_text->tabindex = $form->content->tabindex + 1;
			$form->move_after( $form->link_text, $form->content );

			// remove the tags input
			$form->remove( $form->tags );

		}

		/**
		 * Store the new 'Link Text' field in PostInfo
		 *
		 * @param Post $post The post that's being edited
		 * @param FormUI $form The form that is used on the publish page
		 */
		public function action_publish_post( $post, $form ) {
			if( $form->link_text->value ) {
				$post->info->link_text = $form->link_text->value;
			}
			else {
				$post->info->link_text = 'link';
			}
		}
}

?>
