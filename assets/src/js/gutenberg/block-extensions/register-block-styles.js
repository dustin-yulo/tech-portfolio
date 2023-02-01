/**
 * Register block styles.
 *
 * @package DY_Tech_Portfolio
 */

import { __ } from '@wordpress/i18n';
import { registerBlockStyle } from '@wordpress/blocks';

// Add more button styles
const techPortfolioThemeButtonStyles = [
	{
		name: 'dy-tech-portfolio-theme-fill-button',
		label: __( 'Theme fill', 'dy-tech-portfolio' ),
	},
	{
		name: 'dy-tech-portfolio-theme-outline-button',
		label: __( 'Theme outline', 'dy-tech-portfolio' ),
	},
];

// Register styles
const register = () => {
	techPortfolioThemeButtonStyles.forEach( ( techPortfolioThemeButtonStyle ) =>
		registerBlockStyle( 'core/button', techPortfolioThemeButtonStyle )
	);
};

//Register and unregister styles on dom ready.
wp.domReady( () => {
	register();
} );
