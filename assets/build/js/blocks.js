/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/gutenberg/block-extensions/register-block-styles.js":
/*!********************************************************************!*\
  !*** ./src/js/gutenberg/block-extensions/register-block-styles.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/**
 * Register block styles.
 *
 * @package DY_Tech_Portfolio
 */




// Add more button styles
const techPortfolioThemeButtonStyles = [{
  name: 'dy-tech-portfolio-theme-fill-button',
  label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Theme fill', 'dy-tech-portfolio')
}, {
  name: 'dy-tech-portfolio-theme-outline-button',
  label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__.__)('Theme outline', 'dy-tech-portfolio')
}];

// Register styles
const register = () => {
  techPortfolioThemeButtonStyles.forEach(techPortfolioThemeButtonStyle => (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__.registerBlockStyle)('core/button', techPortfolioThemeButtonStyle));
};

//Register and unregister styles on dom ready.
wp.domReady(() => {
  register();
});

/***/ }),

/***/ "./src/js/gutenberg/blocks/button-with-font-awesome-icon/edit.js":
/*!***********************************************************************!*\
  !*** ./src/js/gutenberg/blocks/button-with-font-awesome-icon/edit.js ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Edit)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__);




function Edit(_ref) {
  let {
    attributes,
    setAttributes
  } = _ref;
  const {
    buttonText,
    fontAwesomeClass
  } = attributes;
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.PanelBody, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.TextControl, {
    label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Font Awesome class', 'dy-tech-portfolio'),
    help: (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Find the Font Awesome icon class you want to use ', 'dy-tech-portfolio'), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("a", {
      href: "https://fontawesome.com/icons",
      target: "_blank"
    }, (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('here', 'dy-tech-portfolio'))),
    value: fontAwesomeClass,
    onChange: newFontAwesomeClass => setAttributes({
      fontAwesomeClass: newFontAwesomeClass
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Tip, null, (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Get only the class names and not the whole HTML element', 'dy-tech-portfolio'), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("br", null), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("br", null), (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Example:', 'dy-tech-portfolio'), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("br", null), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("b", null, "fa-solid fa-font-awesome")))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.useBlockProps)(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.RichText, {
    placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Add text...', 'dy-tech-portfolio'),
    value: buttonText,
    onChange: newButtonText => setAttributes({
      buttonText: newButtonText
    })
  }))));
}

/***/ }),

/***/ "./src/js/gutenberg/blocks/button-with-font-awesome-icon/index.js":
/*!************************************************************************!*\
  !*** ./src/js/gutenberg/blocks/button-with-font-awesome-icon/index.js ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./edit */ "./src/js/gutenberg/blocks/button-with-font-awesome-icon/edit.js");




(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('dy-tech-portfolio/button-with-font-awesome-icon', {
  title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Button with Font Awesome icon', 'dy-tech-portfolio'),
  description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Use free Font Awesome classes to display icons in buttons', 'dy-tech-portfolio'),
  icon: (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("svg", {
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 448 512"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("path", {
    d: "M48 56c0-13.3-10.7-24-24-24S0 42.7 0 56V456c0 13.3 10.7 24 24 24s24-10.7 24-24V124.2l12.5-2.4c16.7-3.2 31.5-8.5 44.2-13.1l0 0 0 0c3.7-1.3 7.1-2.6 10.4-3.7c15.2-5.2 30.4-9.1 51.2-9.1c25.6 0 43 6 63.5 13.3l.5 .2c20.9 7.4 44.8 15.9 79.1 15.9c32.3 0 53.7-6.8 90.5-19.6V342.9l-9.5 3.3c-41.5 14.4-55.2 19.2-81 19.2c-25.7 0-43.1-6-63.6-13.3l-.6-.2c-20.8-7.4-44.8-15.8-79-15.8c-16.8 0-31 2-43.9 5c-12.9 3-20.9 16-17.9 28.9s16 20.9 28.9 17.9c9.6-2.2 20.1-3.7 32.9-3.7c25.6 0 43 6 63.5 13.3l.5 .2c20.9 7.4 44.8 15.9 79.1 15.9c34.4 0 56.4-7.7 97.8-22.2c7.5-2.6 15.5-5.4 24.4-8.5l16.2-5.5V360 72 38.4L416.2 49.3c-9.7 3.3-18.2 6.3-25.7 8.9c-41.5 14.4-55.2 19.2-81 19.2c-25.7 0-43.1-6-63.6-13.3l-.6-.2c-20.8-7.4-44.8-15.8-79-15.8c-27.8 0-48.5 5.5-66.6 11.6c-4.9 1.7-9.3 3.3-13.6 4.8c-11.9 4.3-22 7.9-34.7 10.3L48 75.4V56z"
  })),
  category: 'dy-tech-portfolio',
  parent: ['core/buttons'],
  textdomain: 'dy-tech-portfolio',
  attributes: {
    buttonText: {
      type: 'string',
      default: ''
    },
    fontAwesomeClass: {
      type: 'string',
      default: ''
    }
  },
  edit: _edit__WEBPACK_IMPORTED_MODULE_3__["default"]
});

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

module.exports = window["wp"]["i18n"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**************************!*\
  !*** ./src/js/blocks.js ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _gutenberg_blocks_button_with_font_awesome_icon__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./gutenberg/blocks/button-with-font-awesome-icon */ "./src/js/gutenberg/blocks/button-with-font-awesome-icon/index.js");
/* harmony import */ var _gutenberg_block_extensions_register_block_styles__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./gutenberg/block-extensions/register-block-styles */ "./src/js/gutenberg/block-extensions/register-block-styles.js");
// Blocks


// Block extensions

})();

/******/ })()
;
//# sourceMappingURL=blocks.js.map