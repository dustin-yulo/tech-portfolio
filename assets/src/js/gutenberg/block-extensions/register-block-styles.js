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
		name: 'layout-border-blue-fill',
		label: __( 'Blue outline', 'dy-tech-portfolio' ),
	},
	{
		name: 'layout-border-white-no-fill',
		label: __( 'White outline - to be used with dark background', 'dy-tech-portfolio' ),
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
