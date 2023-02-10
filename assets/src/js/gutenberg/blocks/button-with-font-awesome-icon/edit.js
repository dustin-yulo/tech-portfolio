import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit( { attributes, setAttributes } ) {

	const { buttonText, fontAwesomeClass } = attributes;

	return (
		<>
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
