import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, PanelBody, TextControl, Tip } from '@wordpress/components';

export default function Edit( { attributes, setAttributes } ) {

	const { buttonText, fontAwesomeClass } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody>
				<TextControl
					label={ __( 'Font Awesome class', 'dy-tech-portfolio' ) }
					help={
						<>
							{ __( 'Find the Font Awesome icon class you want to use ', 'dy-tech-portfolio' ) }
							<a href="https://fontawesome.com/icons" target="_blank">
								{ __( 'here', 'dy-tech-portfolio' ) }
							</a>
						</>
					}
					value={ fontAwesomeClass }
					onChange={ ( newFontAwesomeClass ) => setAttributes( { fontAwesomeClass: newFontAwesomeClass } ) }
				/>
				<Tip>
					{ __( 'Get only the class names and not the whole HTML element', 'dy-tech-portfolio' ) }
					<br /><br />
					{ __( 'Example:', 'dy-tech-portfolio' ) }
					<br />
					<b>fa-solid fa-font-awesome</b>
				</Tip>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<Button>
					<RichText
						placeholder={ __( 'Add text...', 'dy-tech-portfolio' ) }
						value={ buttonText }
						onChange={ ( newButtonText ) => setAttributes( { buttonText: newButtonText } ) }
					/>
				</Button>
			</div>
		</>
	);
}
